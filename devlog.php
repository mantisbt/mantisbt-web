<? include( "top.php" ) ?>
<?
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}
	### --------------------
	function string_display( $p_string ) {
		$p_string = stripslashes( $p_string );
		$p_string = nl2br( $p_string );
		return $p_string;
	}
	### --------------------
	function sql_to_unix_time( $p_timeString ) {
		return mktime( substr( $p_timeString, 8, 2 ),
					   substr( $p_timeString, 10, 2 ),
					   substr( $p_timeString, 12, 2 ),
					   substr( $p_timeString, 4, 2 ),
					   substr( $p_timeString, 6, 2 ),
					   substr( $p_timeString, 0, 4 ) );
	}
	### --------------------
	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );

	$post_limit = 10;
	if ( !isset( $f_offset ) ) {
		$f_offset = 0;
	}
?>

<span class="page_title">Devlog</span>
<hr size="1" noshade width="100%" />
<p>
<i>This section is devoted to commentary on checkins in the Changelog and anything else that doesn't make it onto the front page.</i>
<p>
<?
	$query = "SELECT *,UNIX_TIMESTAMP(date_posted) as date_posted
			FROM devlog
			ORDER BY date_posted DESC
			LIMIT $f_offset, $post_limit";
	$result = mysql_query( $query );
	$post_count = mysql_num_rows( $result );
	for ($i=0;$i<$post_count;$i++) {
		$row = mysql_fetch_array($result);
		extract( $row, EXTR_PREFIX_ALL, "v" );
		$v_headline = string_display( $v_headline );
		$v_post = string_display( $v_post );
		$v_date_posted = date( "M, d Y h:i a T", $v_date_posted );
?>
<table class="devlog" border="0" cellspacing="1" cellpadding="4">
<tr>
	<td class="devheadline">
		<b><? echo $v_headline ?></b><br />
		<span class="news_date"><? echo $v_date_posted ?></span>
	</td>
</tr>
<tr>
	<td class="devpost">
		<? echo $v_post ?>
	</td>
</tr>
</table>
<?
	}
?>
<p class="center">
<?
	$f_offset_next = $f_offset + $post_limit;
	$f_offset_prev = $f_offset - $post_limit;

	if ( $f_offset_prev >= 0 ) {
		PRINT "[ <a href=\"devlog.php?f_offset=$f_offset_prev\">newer posts</a> ]";
	}
	if ( $post_count==$post_limit ) {
		PRINT " [ <a href=\"devlog.php?f_offset=$f_offset_next\">older posts</a> ]";
	}
?>
<? include( "bot.php" ); ?>