<?php include( "top.php" ); ?>

<span class="page_title">Polls</span>
<hr size="1" noshade="noshade" width="100%" />
<p>
These polls and surveys help chart the direction Mantis takes.
<p>
	<table cellpadding=4 width="100%">
<?php
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );
	$query = "SELECT *, UNIX_TIMESTAMP(timeStamp) as timeStamp
			FROM vbooth_desc
			ORDER BY pollID DESC";
	$result = mysql_query( $query );
	$poll_count = mysql_num_rows( $result );
	for ($i=0;$i<$poll_count;$i++) {
		$row = mysql_fetch_array( $result );
		$t_poll_id = $row["pollID"];
		$t_poll_title = stripslashes( $row["pollTitle"] );
		$t_poll_timeStamp = $row["timeStamp"];

		$t_poll_timeStamp = date( "m-d-Y", $t_poll_timeStamp );

		PRINT "<tr>";
			PRINT "<td class=\"poll_date\">[ $t_poll_timeStamp ]</td>";
			PRINT "<td class=\"poll_question\"><a href=\"view_poll.php?f_poll_id=$t_poll_id\">$t_poll_title</a></td>";
			PRINT "<td class=\"poll_results\">[ <a href=\"http://mantisbt.sourceforge.net/view_poll.php?f_done=1&f_poll_id=$t_poll_id\"><font size=-1>view results</font></a> ]</td>";
		PRINT "</tr>";
	}
?>
<tr>
	<td colspan=3>
		<br />
		<a class="center" href="vap.php">View All Polls</a>
		<br />
	</td>
</tr>

<tr>
	<td colspan=3>
		<br />
		<a name="survey"><span class="section">Surveys</span></a>
		<p>
		<ul>
<?php
	$query = "SELECT *
			FROM questions
			ORDER BY date_submitted DESC";
	$result = mysql_query( $query );
	$question_count = mysql_num_rows( $result );
	for ($i=0;$i<$question_count;$i++) {
		$row = mysql_fetch_array( $result );
		$t_id = $row["id"];
		$t_subject = stripslashes( $row["subject"] );
?>
			<li><a href="survey.php?f_id=<?php echo $t_id ?>"><?php echo $t_subject ?></a></li>
<?php
	}
?>
		</ul>
	</td>
</tr>
	</table>

<?php include( "bot.php" ); ?>