<? include( "top.php" ); ?>

<span class="page_title">Viewing All Polls</span>
<hr size=1 noshade width="100%">
<p>

<a class="bold" href="polls.php">Go back to the Polls</a>
<p>
<?
	error_reporting(E_ERROR);
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	require('phpPolls/phpPollConfig.php');
	require('phpPolls/phpPollUI.php');

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );
	$query = "SELECT *, UNIX_TIMESTAMP(timeStamp) as timeStamp
			FROM vbooth_desc
			ORDER BY pollID DESC";
	$result = mysql_query( $query );
	$poll_count = mysql_num_rows( $result );
	for ($i=0;$i<$poll_count;$i++) {
		$row = mysql_fetch_array( $result );
		$t_poll_id = $row["pollID"];

		poll_viewResults( $t_poll_id );

		PRINT "<p>[ <a href=\"view_poll.php?f_poll_id=$t_poll_id\">Vote</a> ]";
		PRINT "<p><hr><p>";
	}
?>
<p>
<a class="bold" href="polls.php">Go back to the Polls</a>

<? include( "bot.php" ); ?>