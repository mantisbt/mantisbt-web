<?php
	$g_hostname = 'localhost';
	$g_db_username = 'root';
	$g_db_password = '';
	$g_database_name = 'mantisbt';

	$g_news_view_limit = 10;

	$g_mantis_news_table = 'mantis_news_table';
	$g_mantis_user_table = 'mantis_user_table';

	$g_mantis_path = 'mantis/';

	########################################
	# Include user's config, if available
	########################################

	$t_config_inc = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config_inc.php';
	if ( file_exists( $t_config_inc ) ) {
		require_once( $t_config_inc );
	}
?>