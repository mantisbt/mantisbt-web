<?php

/**
 * Nightly builds page is built dynamically by reading the contents
 * of the /builds directory
 */


/**
 * Parsing directories in sorted order using provided callback function
 */
class SortingIterator extends ArrayIterator {
	public function __construct( Traversable $iterator, $callback ) {
		parent::__construct( iterator_to_array( $iterator ) );
		$this->uasort( $callback );
	}
}

/**
 * Retrieves the list of builds from the specified path
 * @param string $p_path
 * @param array $p_builds
 * @param SplFileInfo $p_logfile
 * @return bool false in case of errors
 */
function get_builds_list( $p_path, &$p_builds, &$p_logfile ) {
	# Error handling in case the path does not exist
	if( !is_dir( $p_path ) ) {
		print_error( "Path '$p_path' not found" );
		return false;
	}

	# Loop over parent directories (channels)
	$t_iter_builds = new SortingIterator(
		new FileSystemIterator( $p_path ),
		'strcmp'
	);

	$p_path = '/' . basename( $p_path ) . '/';

	$p_builds = array();
	foreach( $t_iter_builds as $t_file ) {
		if( $t_file->isDir() ) {
			continue;
		}

		$t_file_url = $p_path . $t_file->getFilename();

		# mantisbt.org is on PHP 5.3.2 and SplFileInfo:: getExtension
		# was only introduced in 5.3.6, so, until we upgrade the server...
		# if( $t_file->getExtension() == 'log' ) {
		if( substr( $t_file, -3, 3 ) == 'log' ) {
			$p_logfile = array(
				'file' => $t_file_url,
				'time' => $t_file->getMTime()
			);
		} else {
			# Break down filename into components
			$t_result = preg_match(
				'/^mantisbt-(.*-?.*)-(master.*?)-(.*)\.(.*)(?:\.)?(digests)?$/U',
				$t_file->getFileName(),
				$t_match
			);
			if( $t_result != 1 ) {
				continue;
			}

			$t_sha = $t_match[3];
			$t_ext = $t_match[4];

			# Build details
			$p_builds[$t_sha]['branch'] = $t_match[2];
			$p_builds[$t_sha]['version'] = $t_match[1];

			# Digest and zip/tarball file names
			if( isset( $t_match[5] ) ) {
				$p_builds[$t_sha][$t_ext]['digests'] = $t_file_url;
			} else {
				$p_builds[$t_sha][$t_ext]['file'] = $t_file_url;
				$p_builds[$t_sha][$t_ext]['time'] = $t_file->getMTime();
			}
		}
	}
	return true;
}

/**
 * Prints timestamp in YYYY-MM-DD HH:mm:ss format
 */
function print_timestamp( $p_time ) {
	return date( 'Y-m-d H:i:s', $p_time );
}

/**
 * Prints download links and timestamp for the file
 */
function print_file_details( $p_type, $p_file ) {
	if( is_null( $p_file ) || !isset( $p_file['file'] ) ) {
		return '
				<td class="table-cell center">Unavailable</td>';
	} else {
		return sprintf( '
				<td class="table-cell center">
					<a href="%s"><img src="images/zip.gif" alt="%s"> Download</a>
					(%s)
					<br />
					%s
				</td>',
			$p_file['file'], $p_type,
			isset( $p_file['digests'] )
				? sprintf( '<a href="%s">digests</a>', $p_file['digests'] )
				: 'no digest',
			print_timestamp( $p_file['time'] )
		);
	}
}

/**
 * Prints the Travis-CI status icon for the given branch
 * @param string $p_branch Branch name
 */
function print_travis_status( $p_branch ) {
	return sprintf( '
					<a href="https://travis-ci.org/mantisbt/mantisbt/builds">
						<img src="https://travis-ci.org/mantisbt/mantisbt.png?branch=%s" />
					</a>',
		$p_branch
	);
}

/**
 * Prints the table with the builds
 * @param array $p_builds
 */
function print_builds_list( $p_builds ) {
	global $g_bugs_url;

	# printf formats
	$t_fmt_sha_link = '
					<a href="' . $g_bugs_url . 'plugin.php?page=Source%%2Fsearch&revision=%1$s">%1$s</a>';
	$t_fmt_branch = '
				<td rowspan="%d" class="table-cell">
					%s
					<br />%s
				</td>';
	$t_fmt_build_row = '
			<tr class="table-row">%s
				<td class="table-cell center">%s
				</td>
				%s
				%s
			</tr>' . "\n";

	# Count number of builds available for each branch
	foreach( $p_builds as $t_build ) {
		$t_branch = $t_build['branch'];
		if( isset( $t_build_count[$t_branch] ) ) {
			$t_build_count[$t_branch]++;
		} else {
			$t_build_count[$t_branch] = 1;
		}
	}

	# Table header
	echo '	<!-- Downloads table -->
	<table class="table" style="padding: 2px;">
		<thead class="table-header">
			<tr class="table-row">
				<th class="table-cell" style="text-align: left;">Branch (Release)</th>
				<th class="table-cell">Commit</th>
				<th class="table-cell">Tarballs</th>
				<th class="table-cell">Zipballs</th>
			</tr>
		</thead>

		<tbody>';

	# Table body
	$t_branch = null;
	foreach( $p_builds as $t_sha => $t_build ) {
		if( $t_branch != $t_build['branch'] ) {
			$t_branch = $t_build['branch'];
			$t_current = sprintf(
				$t_fmt_branch,
				$t_build_count[$t_branch],
				sprintf(
					'%1$s<br />(%2$s)',
					$t_build['branch'],
					$t_build['version']
				),
				print_travis_status( $t_branch )
			);
		} else {
			$t_current = '';
		}

		printf(
			$t_fmt_build_row,
			$t_current,
			sprintf( $t_fmt_sha_link, $t_sha),
			print_file_details( 'tarball', isset( $t_build['tar.gz'] ) ? $t_build['tar.gz'] : null),
			print_file_details( 'zipball', isset( $t_build['zip'] ) ? $t_build['zip'] : null)
		);
	}

	echo '
		</tbody>
	</table>

	<br />';
}

/**
 * Main body
 */

	# Page header
	$t_sub_title = "Nightly Builds";
	include( "top.php" );

	# Root of builds - try in current dir and one level above if not found
	$t_dir = 'builds';
	$t_path_root = rtrim( $_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR;
	$t_path = realpath( $t_path_root . $t_dir );
	if( false === $t_path ) {
		$t_path = realpath( dirname( $t_path_root ) . DIRECTORY_SEPARATOR . $t_dir );
	}
	if( false === $t_path ) {
		$t_path = $t_dir;
	}

	if( get_builds_list( $t_path, $t_builds, $t_logfile ) ) {
?>

  <div class="row show-grid clear-both">
    <div class="col-sm-7 col-md-8">
	    <h1>Nightly Builds Downloads</h1>
    </div>
  </div>

  <br>

<?php
		print_builds_list( $t_builds );
?>

	<div>
		View the Nightly Builds script's
		<a href="<?php echo $t_logfile['file']; ?>">Log File</a>
		(<?php echo print_timestamp( $t_logfile['time'] ); ?>).

		<p>All times on this page are <?php echo date('T (\U\TCP)') ?>.</p>
	</div>

<?php
	}

	include( "bot.php" );
