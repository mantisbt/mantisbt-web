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

<?
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	include("mantis/constant_inc.php");
	include("mantis/config_inc.php");
	require('phpPolls/phpPollConfig.php3');
	require('phpPolls/phpPollUI.php3');

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );

	if ( !isset( $f_done ) ) {
		poll_generateUI( $f_poll_id, "http://mantisbt.sourceforge.net/view_poll.php3?f_done=1&f_poll_id=$f_poll_id" );

		PRINT "<p><a href=\"http://mantisbt.sourceforge.net$PHP_SELF?f_done=1&f_poll_id=$f_poll_id\">See Results</a>";
	} else {
		poll_viewResults( $f_poll_id );
	}
?>
<p>
<b><a href="polls.php3">Go back to the Polls</a></b>

</td>
</tr>
</table>

</body>
</html>