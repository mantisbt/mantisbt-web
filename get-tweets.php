<?php
/**
 * Retrieve recent mantisbt tweets and prints them as JSON
 *
 * Used as AJAX from custom.js
 */

use Abraham\TwitterOAuth\TwitterOAuth;

require_once 'config_defaults_inc.php';
require_once 'vendor/autoload.php';

session_start();

/**
 * Avoid PHPStorm unused variable warnings
 * @var string $g_twitter_consumer_key
 * @var string $g_twitter_consumer_secret
 * @var string $g_twitter_access_token
 * @var string $g_twitter_access_token_secret
 * @var string $g_twitter_username
 * @var int $g_twitter_tweets_count
 */

$twitter = new TwitterOAuth(
    $g_twitter_consumer_key,
    $g_twitter_consumer_secret,
    $g_twitter_access_token,
    $g_twitter_access_token_secret
);

$tweets = $twitter->get( 'statuses/user_timeline',
    array(
        'screen_name' => $g_twitter_username,
        'count' => $g_twitter_tweets_count,
    )
);

http_response_code($twitter->getLastHttpCode());
echo json_encode($tweets);
