<?php include( "top.php" ); ?>
<?php
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}
	### --------------------
	function string_display( $p_string ) {
		$p_string = string_insert_hrefs( $p_string );
		$p_string = stripslashes( $p_string );
		$p_string = nl2br( $p_string );
		return $p_string;
	}
	### --------------------
	function update_visits() {
		global $REMOTE_ADDR, $HTTP_REFERER, $HTTP_USER_AGENT;

		$t_ip 			= $REMOTE_ADDR;
		$t_referer 		= $HTTP_REFERER;
		$t_user_agent 	= $HTTP_USER_AGENT;
		$query = "INSERT INTO visitors
					(id, ip, visit_time, user_agent, referer)
					VALUES
					(null, '$t_ip', NOW(), '$t_user_agent', '$t_referer')";
		mysql_query( $query );
	}
	
	function print_rss_feed( $p_title, $p_rss_url, $p_hyperlink = true, $p_chars_to_skip = 0, $p_number_of_items = 5 ) {
		global $g_rss_cache_path;

		// Parse it
		$feed = new SimplePie();
		$feed->set_feed_url( $p_rss_url );

	    if ( empty( $g_rss_cache_path ) ) {
		    $feed->enable_cache( false );
	    } else {
	        $feed->set_cache_location( $g_rss_cache_path );
	    }

		$feed->init();

		$items = $feed->get_items(0, $p_number_of_items);

		echo '<span class="page_title"><b>', $p_title, '</b></span>';
		echo '<ul>';

		foreach ( $items as $item ) {
			$t_title = $item->get_title();

			if ( $p_chars_to_skip > 0 ) {
				$t_title = substr( $t_title, $p_chars_to_skip );
				if (strstr($t_title, ":")) {
					$t_title = "<b>" . str_replace(":", ":</b>", $t_title);
				}
			}

			if ( $p_hyperlink ) {
				echo '<li><a href="', $item->get_permalink(), '">', $t_title, '</a></li>';
			} else {
				echo '<li>', $t_title, '</li>';
			}
		}
	
		echo '</ul>';

	    unset( $feed );
	    unset( $items );
	}

	@db_connect( $_GLOBALS['g_hostname'], $_GLOBALS['g_db_username'], $_GLOBALS['g_db_password'], $_GLOBALS['g_database_name'] );
	@update_visits();
?>

<div>
        <p>MantisBT is a free <a href="testimonials.php">popular</a> web-based bugtracking system (<a href="/wiki/doku.php/mantisbt:features">feature list</a>).  It is written in the <a href="http://www.php.net/" rel="nofollow">PHP</a> scripting language and works with <a href="http://www.mysql.com/" rel="nofollow">MySQL</a>, MS SQL, and PostgreSQL databases and a webserver.  MantisBT has been installed on Windows, Linux, Mac OS, OS/2, and others.  Almost any web browser should be able to function as a client.  It is released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html" rel="nofollow">GNU General Public License</a> (GPL).</p>
		<p>The latest stable version is <a href="download.php"><?php @include("files/VERSION_STABLE") ?></a>.</p>
		<p>The latest development version is <a href="download.php"><?php @include("files/VERSION") ?></a>.</p>
</div>

<?php
	include_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'simplepie.inc');

?>
	<div id="genericbox">
	<?php
	print_rss_feed( 'Mantis Twitter News', 'http://twitter.com/statuses/user_timeline/7199732.rss', /* hyperlink */ false, 9, 3 );
?>
	<p>See <a href="http://twitter.com/mantisbt">Twitter page</a> for more news or to follow.</p>
	</div>

	<div id="genericbox">
	<?php print_rss_feed( 'Latest Blog Posts', 'http://www.mantisbt.org/blog/?feed=rss2' ); ?>
	<p>See <a href="http://www.mantisbt.org/blog/">blog</a> for more news.</p>
	</div>

	<div class="clearBoth"></div>
	<?php
	include( "adsense_vertical_inc.php" );

	$t_footer_sponsored_links = '';

	include( "bot.php" ); 
?>
