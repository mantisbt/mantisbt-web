<?php
	$g_mantis_path = "../mantis/";
	$g_mantis_url = "../mantis/";

	if ( file_exists( dirname(__FILE__) . "/mantisweb_config_inc.php" ) ) {
		include ( dirname(__FILE__) . "/mantisweb_config_inc.php");
	}

	include( $g_mantis_path . "constant_inc.php" );

	if ( file_exists( $g_mantis_path . "custom_constant_inc.php" ) ) {
		include( $g_mantis_path . "custom_constant_inc.php" );
	}

	if ( file_exists( $g_mantis_path . "config_defaults_inc.php" ) ) {
		include( $g_mantis_path . "config_defaults_inc.php" );
	} else {
		include( $g_mantis_path . "default/config_inc1.php" );
	}

	if ( file_exists( $g_mantis_path . "custom_config_inc.php" ) ) {
		include( $g_mantis_path . "custom_config_inc.php" );
	} else {
		include( $g_mantis_path . "config_inc.php" );
	}

	if ( file_exists( $g_mantis_path . "default/config_inc2.php" ) ) {
		include( $g_mantis_path . "default/config_inc2.php" );
	}

	function db_connect($p_hostname="localhost", $p_username="root",
						$p_password="", $p_database="mantis",
						$p_port=3306 ) {

		$t_result = mysql_connect(  $p_hostname.":".$p_port,
									$p_username, $p_password );
		$t_result = mysql_select_db( $p_database );
	}

	db_connect( $g_hostname, $g_db_username, $g_db_password, $g_database_name );

	if ( isset( $f_allow_publishing ) ) {
		$f_allow_publishing = 1;
	} else {
		$f_allow_publishing = 0;
	}

	$query = "UPDATE feedback_table
			SET approved=1
			WHERE id='$f_id'";
	$result = mysql_query( $query );

	header( "Status: 302" );
	header( "Content-Type: text/html" );
	header( "Pragma: no-cache" );
	header( "Expires: Fri, 01 Jan 1999 00:00:00 GMT" );
	header( "Cache-control: no-cache, no-cache=\"Set-Cookie\", private" );
	header( "Location: who_approve_page.php" );
?>