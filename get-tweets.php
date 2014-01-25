<?php
    include( 'config_defaults_inc.php' );

    session_start();
    require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library

    function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
      $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
      return $connection;
    }

    $connection = getConnectionWithAccessToken( $g_twitter_consumer_key, $g_twitter_consumer_secret, $g_twitter_access_token, $g_twitter_access_token_secret );

    $tweets = $connection->get( 'https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=' . $g_twitter_username . "&count=" . $g_twitter_tweets_count );

    echo json_encode($tweets);
