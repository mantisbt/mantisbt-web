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

<span class="page_title">Tasks</span>
<hr size=1 noshade width="100%">
<p>
<i>I'd like volunteers to take these tasks on.  Find one you like and <a href="mailto:kenito@300baud.org">email me</a>.</i>
<p>
<?
	$query = "SELECT *,UNIX_TIMESTAMP(date_posted) as date_posted
			FROM tasks
			ORDER BY milestone ASC";
	$result = mysql_query( $query );
	$post_count = mysql_num_rows( $result );
	for ($i=0;$i<$post_count;$i++) {
		$row = mysql_fetch_array($result);
		extract( $row, EXTR_PREFIX_ALL, "v" );
		$v_user = string_display( $v_user );
		$v_title = string_display( $v_title );
		$v_description = string_display( $v_description );
		$v_milestone = string_display( $v_milestone );
		$v_date_posted = date( "m-d-Y h:i a T", $v_date_posted );
?>
<p>
<table width="100%" bgcolor="#000000" border="0" cellspacing="1" cellpadding="4">
<tr bgcolor="#ddddff">
	<td colspan="3">
		<b><? echo $v_title ?></b> - <span class="news_date">[ <? echo $v_date_posted ?> ]</span>
	</td>
</tr>
<tr bgcolor="#ddddee">
	<td>
		Assigned to: <i><? echo $v_user ?></i>
	</td>
	<td>
		Hours remaining: <b><? echo $v_work_left ?></b>
	</td>
	<td>
		Scheduled for: <b><? echo $v_milestone ?></b>
	</td>
</tr>
<tr bgcolor="#ffffff">
	<td colspan="3">
		<? echo $v_description ?>
	</td>
</tr>
</table>
<?
	}
?>
<? include( "bot.php" ); ?>