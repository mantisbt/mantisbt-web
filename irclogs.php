<?php

/**
 * IRC logs archive page is built dynamically by reading the contents
 * of the /irclogs directory
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
 * Builds an url-encoded href for the given path
 * @param string $p_path
 * @global int $t_depth how deep below document root '/irclogs' is
 * @return string absolute href to path
 */
function build_href( $p_path ) {
	global $t_depth;

	$t_split = explode( DIRECTORY_SEPARATOR, $p_path );
	$t_slice = array_slice( $t_split, $t_depth );

	return '/' . implode( '/', array_map( 'urlencode', $t_slice ) );
}


/**
 * Retrieves an array of yearly subdirs for a channel in the specified
 * directory, in reverse older (most recent first)
 * @param string $p_path
 * @return array|bool false if no subdirs found
 */
function get_years( $p_path ) {
	$t_years = false;

	# Loop over subdirectories
	$t_iter_years = new FileSystemIterator( $p_path );
	foreach( $t_iter_years as $t_year ) {
		if( $t_year->isDir() ) {
			$t_years[$t_year->getFileName()] = build_href( $t_year->getPathname() );
		}
	}

	# Most recent year first
	if( $t_years !== false ) {
		krsort( $t_years );
	}

	return $t_years;
}


/**
 * Build the table with the IRC channel logs list
 * @param string $p_path
 */
function build_channels_list( $p_path ) {
	# printf formats
	$t_fmt_irchref = '<a href="irc://irc.freenode.net/%1$s">#%1$s</a>';
	$t_fmt_channel =
		  '		<div class="table-cell table-name">' . "\n"
		. '			<p><span class="tooltip">%s<span>Connect to the channel</span></span></p>' . "\n"
		. "		</div>\n";
	$t_fmt_current =
		  "			%s\n"
		. '			(<a href="%s/latest.log.html">latest&nbsp;log</a>)' . "\n";
	$t_fmt_year = '<a href="%s">%s</a>';

	# Error handling in case the path does not exist
	if( !is_dir( $p_path ) ) {
		echo '	<div class="table-row">' . "\n";
		echo '		<div class="table-cell table-name ">' . "\n";
		echo "			ERROR: path '$p_path' not found\n";
		echo "		</div>\n";
		echo "	</div>\n\n";
		return;
	}

	# Loop over parent directories (channels)
	$t_iter_channels = new SortingIterator(
		new FileSystemIterator( $p_path ),
		'strcmp'
	);
	foreach( $t_iter_channels as $t_channel ) {
		if( $t_channel->isDir() && $t_channel->isReadable() ) {
			$t_current = false;
			$t_channel_name = $t_channel->getFileName();

			# Get subdirectories (years)
			$t_years = get_years( $t_channel->getPathname() );

			# Build channel name for display
			if( $t_years == false ) {
				# No subdirs for years found
				$t_href = build_href( $t_channel->getPathname() );
				$t_channel_name = sprintf( $t_fmt_year, $t_href, '#' . $t_channel_name );
			} else {
				if( array_key_exists( date( 'Y' ), $t_years ) ) {
					# Current year exists - link to irc channel
					$t_current = true;
					$t_channel_name = sprintf( $t_fmt_irchref, $t_channel_name );
					$t_href = reset( $t_years );
				} else {
					# Old channel - just display the name
					$t_channel_name = '#' . $t_channel_name;
				}

				# Replace array elements with hyperlinks
				array_walk(
					$t_years,
					function( &$p_elem, $p_key ) use ( $t_fmt_year ) {
						$p_elem = sprintf( $t_fmt_year, $p_elem, $p_key );
					}
				);

			}

			# Row
			echo '	<div class="table-row">' . "\n";

			# Col 1: channel
			printf( $t_fmt_channel, $t_channel_name, $t_href );

			# Col 2: current
			echo '		<div class="table-cell table-current">' . "\n";
			if( $t_current ) {
				printf( $t_fmt_current, array_shift( $t_years ), $t_href );
			}
			echo "		</div>\n";

			# Col 3: archives
			echo '		<div class="table-cell">' . "\n";
			if( is_array( $t_years ) ) {
				# Display channel div & links for each year
				echo '			' . implode( ", \n			", $t_years ) . "\n";
			}
			echo "		</div>\n";

			echo "	</div>\n\n";
		}
	}
}


	$t_sub_title = "IRC Logs";
	include( "top.php" );
?>

<h4>IRC Logs Archive</h4>
<div class="table">

	<div class="table-header">
		<div class="table-cell">
			Channel
		</div>
		<div class="table-cell table-current">
			Current year
		</div>
		<div class="table-cell">
			Archives
		</div>
	</div>

<?php
	# Root of irclogs - try in current dir and one level above if not found
	$t_dir = 'irclogs';
	$t_path_root = rtrim( $_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR ) . DIRECTORY_SEPARATOR;
	$t_path = realpath( $t_path_root . $t_dir );
	if( false === $t_path ) {
		$t_path = realpath( $t_path_root . '..' . DIRECTORY_SEPARATOR . $t_dir );
	}
	if( false === $t_path ) {
		$t_path = $t_dir;
	}

	# Depth is used to build relative path for URL links
	$t_depth = substr_count( $t_path, DIRECTORY_SEPARATOR );

	build_channels_list( $t_path );
?>

</div>

<?php
	include( "bot.php" );
