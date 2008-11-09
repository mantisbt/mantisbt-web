<?php
	$g_hostname = 'localhost';
	$g_db_username = 'root';
	$g_db_password = '';
	$g_database_name = 'mantisbt';

	$g_news_view_limit = 10;

	$g_mantis_news_table = 'mantis_news_table';
	$g_mantis_user_table = 'mantis_user_table';

	$g_mantis_path = 'mantis/';

	$g_lang_cvs_path = 'lang-cvs/';

	# Directory for simplepie cache - set to false to disable cache
	$g_rss_cache_path = '/tmp/';

	########################################
	# Include user's config, if available
	########################################

	$t_config_inc = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config_inc.php';
	if ( file_exists( $t_config_inc ) ) {
		require_once( $t_config_inc );
	}

	# The latest version from the stable branch.
	$g_latest_version_stable = '1.1.4';
	
	# The latest version from the development branch.
	$g_latest_version_dev = '1.2.0a2';
?>
