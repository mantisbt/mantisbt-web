<?php
	$g_hostname = 'localhost';
	$g_db_username = 'root';
	$g_db_password = '';
	$g_database_name = 'mantisbt';

	# Information about latest stable release.
	$g_latest_version_stable = '1.2.16';

	# Information about latest development release.
	$g_latest_version_dev = '1.3.0b1';
	$g_latest_version_dev_roadmap = '1.3.x';

	########################################
	# Include user's config, if available
	########################################

	$t_config_inc = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config_inc.php';
	if ( file_exists( $t_config_inc ) ) {
		require_once( $t_config_inc );
	}
