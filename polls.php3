<html>
<head>
<? include( "css.php3" ) ?>
<title>Mantis</title>
</head>
<body>

<p>
<div align=center>
	<h2>Mantis</h2>
	Last modified: <? echo date( "M d, Y - H:m", getlastmod() )?>
</div>

<p>
<div align=center>

<table width=100%>
<tr valign=top>
	<? include("side_menu.php3") ?>
<td width=100%>
<p>
<b><font size=+1>Polls</font></b>

<p>
Please fill out some of the polls and surveys on this page.  This will provide feedback and help chart the direction Mantis goes in.
<p>
	<table cellpadding=4>
<?
	include("mantis/config_inc.php");

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
		$t_poll_title = $row["pollTitle"];
		$t_poll_timeStamp = $row["timeStamp"];

		$t_poll_timeStamp = date( "m-d-Y", $t_poll_timeStamp );

		PRINT "<tr>";
		PRINT "<td width=\"15%\">[ $t_poll_timeStamp ]</td>";
		PRINT "<td width=\"70%\"><a href=\"view_poll.php3?f_poll_id=$t_poll_id\">$t_poll_title</a></td>";
		PRINT "<td width=\"15%\">[ <a href=\"http://mantisbt.sourceforge.net/view_poll.php3?f_done=1&f_poll_id=$t_poll_id\"><font size=-1>view results</font></a> ]</td>";
		PRINT "</tr>";
	}
?>
<tr>
	<td colspan=3>
	<br>
	<b><font size=+1>Surveys</font></b><br>
	<p>
	<a href="survey.php3"><b>Answer Survey</b></a>
	</td>
</tr>
	</table>
</td>
</tr>
</table>

</body>
</html>