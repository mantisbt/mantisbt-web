<? include( "top.php" ); ?>

<span class="page_title">View Poll</span>
<hr size=1 noshade width="100%">
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

	if ( !isset( $f_done ) ) {
		poll_generateUI( $f_poll_id, "http://mantisbt.sourceforge.net/view_poll.php?f_done=1&f_poll_id=$f_poll_id" );

		PRINT "<p><a href=\"http://mantisbt.sourceforge.net$PHP_SELF?f_done=1&f_poll_id=$f_poll_id\">See Results</a>";
	} else {
		poll_viewResults( $f_poll_id );
	}
?>
<p>
<a class="bold" href="polls.php">Go back to the Polls</a>

<? include( "bot.php" ); ?>