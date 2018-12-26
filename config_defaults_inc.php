<?php
# Website URLs
$g_wiki_url = '/wiki/';
$g_docs_url = '/docs/';
$g_bugs_url = '/bugs/';
$g_blog_url = '/blog/';
$g_forums_url = '/forums/';

# Documentation
$g_docs_path = 'master/en-US/';
$g_docs_admin_guide = 'Admin_Guide';
$g_docs_dev_guide = 'Developers_Guide';
$g_docs_erd_path = 'erd/';

# Information about latest stable release.
$g_latest_version_stable = '';

# Information about latest legacy release.
$g_latest_version_stable = '';

# Information about latest development release.
$g_latest_version_dev = '';
$g_latest_version_dev_roadmap = '';

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
