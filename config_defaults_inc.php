<?php
	$g_hostname = 'localhost';
	$g_db_username = 'root';
	$g_db_password = '';
	$g_database_name = 'mantisbt';

	# Website URLs
	$g_wiki_url = 'http://www.mantisbt.org/wiki/';
	$g_docs_url = 'http://www.mantisbt.org/docs/';
	$g_bugs_url = 'http://www.mantisbt.org/bugs/';
	$g_blog_url = 'http://www.mantisbt.org/blog/';
	$g_forums_url = 'http://www.mantisbt.org/forums/';

	# Information about latest stable release.
	$g_latest_version_stable = '1.2.15';

	# Information about latest development release.
	$g_latest_version_dev = '1.3.0b1';
	$g_latest_version_dev_roadmap = '1.3.x';

	# Twitter Information
	$g_twitter_username = 'mantisbt';
	$g_twitter_consumer_key = '';
	$g_twitter_consumer_secret = '';
	$g_twitter_access_token = '';
	$g_twitter_access_token_secret = '';
	$g_twitter_tweets_count = 5;

	########################################
	# Include user's config, if available
	########################################

	$t_config_inc = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'config_inc.php';
	if ( file_exists( $t_config_inc ) ) {
		require_once( $t_config_inc );
	}
