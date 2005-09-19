<?php include( "top.php" ); ?>
<?php
	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );
	$query = "SELECT *
			FROM questions
			WHERE id='$f_id'";
	$result = mysql_query( $query );
	$row = mysql_fetch_array( $result );
	extract( $row );
	$question = stripslashes( $question );
?>

<span class="page_title">Survey</span>
<hr size="1" noshade="noshade" width="100%" />
<p>
	Please respond to the following questions.  These will change from time to time as input is received.  Feel free to ignore certain questions but please be honest in your responses.  Your message will be emailed anonymously to the author.  You will automatically be redirected to the index page after submission.  Thanks!
	<p>
	<font size=-1>There is a limit of 10,000 characters.  The system will be disabled if abused.</font>
	<form action="survey_add.php" method="POST">
		<input type=hidden name="f_subject" value="<?php echo $subject ?>" />
		<textarea name="f_message" cols=72 rows=25><?php echo $question ?></textarea><br />
		<input type=submit value="   Send   " />
	</form>

<p>
<a href="polls.php#survey">More Surveys</a>
<?php include( "bot.php" ); ?>