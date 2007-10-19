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

	@db_connect( $_GLOBALS['g_hostname'], $_GLOBALS['g_db_username'], $_GLOBALS['g_db_password'], $_GLOBALS['g_database_name'] );
	@update_visits();
?>

<p class="center">
<table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="4">
<tr valign="top">
	<td class="welcome">
        <p>Mantis is a free <a href="testimonials.php">popular</a> web-based bugtracking system (<a href="/wiki/doku.php/mantisbt:features">feature list</a>).  It is written in the <a href="http://www.php.net/" rel="nofollow">PHP</a> scripting language and works with <a href="http://www.mysql.com/" rel="nofollow">MySQL</a>, MS SQL, and PostgreSQL databases and a webserver.  Mantis has been installed on Windows, Linux, Mac OS, OS/2, and others.  Almost any web browser should be able to function as a client.  It is released under the terms of the <a href="http://www.gnu.org/licenses/old-licenses/gpl-2.0.html" rel="nofollow">GNU General Public License</a> (GPL).</p>
		<p>The latest stable version is <a href="download.php"><?php @include("files/VERSION_STABLE") ?></a>.</p>
		<p>The latest development version is <a href="download.php"><?php @include("files/VERSION") ?></a>.</p>
	</td>
	<td width="220" align="right">
	</td>
</tr>
</table>

<?php
	include_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR . 'simplepie.inc');

	// Parse it
	$feed = new SimplePie();
	$feed->set_feed_url( 'http://www.mantisbt.org/blog/?feed=rss2' );
	$feed->enable_cache(false);
	$feed->init();
	
	$items = $feed->get_items();

	echo '<span class="page_title">Latest News</span>';
	echo '<hr size="1" noshade="noshade" width="100%" />';

	echo '<ul>';

	foreach ( $items as $item )
	{
		echo '<li><a href="', $item->get_permalink(), '">', $item->get_title(), '</a>.</li>';
	}

	echo '</ul>';

	echo '<p>See <a href="http://www.mantisbt.org/blog/">blog</a> for more news.  For older archives, see <a href="http://www.mantisbt.org/bugs/main_page.php">bug tracker news</a>.</p>';	

	include( "adsense_vertical_inc.php" );

	$t_footer_sponsored_links = '
		<a href="http://ontario.propertysold.ca/toronto/" title="Toronto Real Estate" target="_blank">Toronto Real Estate</a>,
		<a href="http://www.roi.com.au/" title="search engine optimisation" target="_blank">search engine optimisation</a>,
		<a href="http://www.iceposter.com/" title="Posters" target="_blank">Posters</a>,
		<a href="http://www.directorydream.com/" title="Web Directory" target="_blank">Web Directory</a>,
		<a href="http://www.dubaishortstay.com/" title="Dubai Hotel Apartment -Dubai Villas - Find a Quality Dubai Apartment or Dubai Villa" target="_blank">Dubai Hotel Apartment - Dubai Villas</a>,
		<a href="http://www.skiamade-obertauern.de" title="Ski Amade, Obertauern &amp; Flachau" target="_blank">Ski Amade, Obertauern &amp; Flachau</a>, 
		<a href="http://www.aoemedia.de/typo3-agentur.html" title="TYPO3" target="_blank">TYPO3</a>
	';

//		<a href="http://www.callfire.com/dialer/cm/info/virtual_call_center.html" title="Virtual Call Center" target="_blank">Virtual Call Center</a>,

	include( "bot.php" ); 
?>
