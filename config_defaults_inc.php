<?php
	$g_hostname = 'localhost';
	$g_db_username = 'root';
	$g_db_password = '';
	$g_database_name = 'mantisbt';

	# The latest version from the stable branch.
	$g_latest_version_stable = '1.2.16';
	$g_latest_version_changelog_link = 'http://www.mantisbt.org/bugs/changelog_page.php?version_id=183';

	# The latest version from the development branch.
	$g_latest_version_dev = '';

	########################################
	# Include user's config, if available
	########################################

	$t_config_inc = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config_inc.php';
	if ( file_exists( $t_config_inc ) ) {
		require_once( $t_config_inc );
	}
