<? include( "top.php3" ); ?>

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
<a class="bold" href="polls.php3">Go back to the Polls</a>

<? include( "bot.php3" ); ?>