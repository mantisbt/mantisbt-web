<? include( "zorblogs.php" ); ?>
<? include( "top.php3" ); ?>
<? include( "mantis/constant_inc.php" ) ?>
<? include( "mantis/config_inc.php" ) ?>
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

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );

	update_visits();
?>

<span class="page_title">Home</span>
<hr size=1 noshade width="100%">
<p class="center">
<table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="4">
<tr valign="top">
	<td class="welcome" width="*">
		Mantis is a php/MySQL/web based bugtracking system.  <a href="mantis.php3">Click here</a> to learn more about it.
		<p>
		It is currently in development and is considered beta.
	</td>
	<td width="220" align="right">
		<table width="220" bgcolor="#000000" border="0" cellspacing="1" cellpadding="3">
		<tr>
			<td class="poll_header">
				<a class="small_bold" href="polls.php3">Recent Polls</a>
			</td>
		</tr>
		<tr>
			<td class="poll">
<?
	$query =  "SELECT *
			FROM vbooth_desc
			ORDER BY pollID DESC
			LIMIT 1";
	$result = mysql_query( $query );
	$row = mysql_fetch_array( $result );
	extract( $row );
	$pollTitle = stripslashes( $pollTitle );
	if ( strlen($pollTitle) > 29 ) {
		$pollTitle = substr( $pollTitle, 0, 29 )."...";
	}
	PRINT "<li><a class=\"small\" href=\"view_poll.php3?f_poll_id=$pollID\">$pollTitle</a></li>";

	$query =  "SELECT *, (pollID*0+RAND()) as rand
			FROM vbooth_desc
			WHERE pollID<>'$pollID'
			ORDER BY rand LIMIT 2";
	$result = mysql_query( $query );
	$poll_count = mysql_num_rows( $result );
	for ($i=0;$i<$poll_count;$i++) {
		$row = mysql_fetch_array( $result );
		extract( $row );
		$pollTitle = stripslashes( $pollTitle );
		if ( strlen($pollTitle) > 29 ) {
			$pollTitle = substr( $pollTitle, 0, 29 )."...";
		}
		PRINT "<li><a class=\"small\" href=\"view_poll.php3?f_poll_id=$pollID\">$pollTitle</a></li>";
	}
?>
			</td>
		</tr>
		<tr>
			<td class="survey">
			<?
				$query =  "SELECT UNIX_TIMESTAMP(date_submitted) as date_submitted
						FROM questions
						ORDER BY id DESC
						LIMIT 1";
				$result = mysql_query( $query );
				$row = mysql_fetch_array( $result );
				extract( $row );
				$date_submitted = date( "m-d", $date_submitted );
				?>
				<a class="small_bold" href="survey.php3?f_id=4">Answer Survey (<? echo $date_submitted ?>)</a>
			</td>
		</tr>
		</table>
	</td>
</tr>
</table>

<?
	if ( !isset( $f_offset ) ) {
		$f_offset = 0;
	}

	### get news count
	$query = "SELECT COUNT(id)
			FROM $g_mantis_news_table";
	$result = mysql_query( $query );
    $total_news_count = mysql_result( $result, 0 );

	$query = "SELECT *,UNIX_TIMESTAMP(date_posted) as date_posted
			FROM $g_mantis_news_table
			ORDER BY id DESC
			LIMIT $f_offset, $g_news_view_limit";
	$result = mysql_query( $query );
    $news_count = mysql_num_rows( $result );

	for ($i=0;$i<$news_count;$i++) {
		$row = mysql_fetch_array($result);
		extract( $row, EXTR_PREFIX_ALL, "v" );
		$v_headline = string_display( $v_headline );
		$v_body = string_display( $v_body );
		$v_date_posted = date( "m-d-Y H:i T", $v_date_posted );

		## grab the username and email of the poster
	    $query = "SELECT username, email
	    		FROM $g_mantis_user_table
	    		WHERE id='$v_poster_id'";
	    $result2 = mysql_query( $query );
	    if ( $result2 ) {
	    	$row = mysql_fetch_array( $result2 );
			$t_poster_name	= $row["username"];
			$t_poster_email	= $row["email"];
		}
?>
<p>
<table width="99%" bgcolor="#000000" border="0" cellspacing="0" cellpadding="4">
<tr>
	<td class="headline">
		<b><? echo $v_headline ?></b> -
		<span class="news_date"><? echo $v_date_posted ?></span> -
		<a href="mailto:<? echo $t_poster_email ?>"><? echo $t_poster_name ?></a>
	</td>
</tr>
<tr>
	<td class="body">
		<? echo $v_body ?>
	</td>
</tr>
</table>
<?
	}
?>

<p class="center">
<?
	$f_offset_next = $f_offset + $g_news_view_limit;
	$f_offset_prev = $f_offset - $g_news_view_limit;

	if ( $f_offset_prev >= 0) {
		PRINT "[ <a href=\"index.php3?f_offset=$f_offset_prev\">newer_news</a> ]";
	}
	if ( $news_count==$g_news_view_limit ) {
		PRINT " [ <a href=\"index.php3?f_offset=$f_offset_next\">older_news</a> ]";
	}
?>
<? include( "bot.php3" ); ?>