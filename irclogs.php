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
	$t_fmt_channel =
		  '    <div class="irc-channel-cell irc-channel-name">' . "\n"
		. "      <p>\n"
		. '        <span class="irc-channel-label">%s</span> ' . "\n"
		. '        (see <a href="%s/latest.log.html">latest log</a>)' . "\n"
		. "      </p>\n"
		. "    </div>\n";
	$t_fmt_year = '<a href="%s">%s</a>';

	# Loop over parent directories (channels)
	$t_iter_channels = new SortingIterator(
		new FileSystemIterator( $p_path ),
		'strcmp'
	);
	foreach( $t_iter_channels as $t_channel ) {
		if( $t_channel->isDir() ) {
			$t_channel_name = $t_channel->getFileName();

			# Get subdirectories (years)
			$t_years = get_years( $t_channel->getPathname() );

			if( false == $t_years ) {
				# No subdirs for years found
				$t_href = build_href( $t_channel->getPathname() );
				$t_channel_name = sprintf( $t_fmt_year, $t_href, $t_channel_name );
			} else {
				$t_href = current( $t_years );
			}

			echo '  <div class="irc-channel-row">' . "\n";
			printf( $t_fmt_channel, $t_channel_name, $t_href );

			if( is_array( $t_years ) ) {
				# Replace array elements with hyperlinks
				array_walk(
					$t_years,
					function( &$p_elem, $p_key ) use ( $t_fmt_year ) {
						$p_elem = sprintf( $t_fmt_year, $p_elem, $p_key );
					}
				);

				# Display channel div & links for each
				echo '    <div class="irc-channel-cell">' . "\n";
				echo '      ' . implode( ", \n      ", $t_years ) . "\n";
				echo "    </div>\n";
			}

			echo "  </div>\n";
		}
	}
}


	include( "top.php" );
?>

<h4>IRC logs</h4>
<div class="irc-channel-list">

<?php
	$t_path_logs = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'irclogs';
	$t_depth = substr_count( $t_path_logs, DIRECTORY_SEPARATOR );

	build_channels_list( $t_path_logs );
?>

</div>

<?php
	ads_print_right_vertical_banner();
	include( "bot.php" );
