<?
	include("mantis/constant_inc.php");
	include("mantis/config_inc.php");

	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );
	$query = "SELECT question
			FROM questions
			ORDER BY date_submitted DESC
			LIMIT 1";
	$result = mysql_query( $query );
	$f_question = stripslashes( mysql_result( $result, 0, 0 ) );
?>

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
	<b><font size=+1>Survey</font></b>
	<p>
	Please respond to the following questions.  These will change from time to time as input is received.  Feel free to ignore certain questions but please be honest in your responses.  Your message will be emailed anonymously to the author.  You will automatically be redirected to the index page after submission.  Thanks!
	<p>
	<font size=-1>There is a limit of 10,000 characters.  The system will be disabled if abused.</font>
	<form action="survey_add.php3" method="POST">
		<textarea name="f_message" cols=72 rows=25><? echo $f_question ?></textarea><br>
		<input type=submit value="   Send   ">
	</form>

</td>
</tr>
</table>
</div>

</body>
</html>