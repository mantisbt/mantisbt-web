<? include( "top.php" ); ?>
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

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );
?>
<span class="page_title">User Testimonials</span>
<hr size=1 noshade width="100%">
<p>

<span class="section">Praise</span>
<p>
<a href="who_add_page.php">Submit your own comment!</a>
<p>

<?php
	$query = "SELECT *, UNIX_TIMESTAMP(date_submitted) as date_submitted
			FROM feedback_table
			WHERE allow_public=1 AND approved=1
			ORDER BY date_submitted DESC";
	$result = mysql_query( $query );
	$feedback_count = mysql_num_rows( $result );
	for ($i=0;$i<$feedback_count;$i++) {
		$row = mysql_fetch_array( $result );
		extract( $row );
?>
		<b><?php echo $organization; ?></b>
		<i><?php echo date( 'Y-M-d', $date_submitted ); ?></i><br />
		<?php echo $from_person; ?><br />
		<?php echo $message; ?><br />
<hr size="1" style="color: #444488">
<?php } ?>

<? include("bot.php"); ?>