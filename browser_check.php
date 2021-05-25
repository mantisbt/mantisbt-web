<?php
require_once 'vendor/autoload.php';

use foroco\BrowserDetection;

/**
 * Returns true if user's browser is not supported
 * @return bool
 */
function is_unsupported_browser(): bool
{
	$t_user_agent = $_SERVER['HTTP_USER_AGENT'] ?? '';
	$t_browser = new BrowserDetection();
	$t_browser = $t_browser->getBrowser( $t_user_agent );

	return $t_browser['browser_name'] == 'Internet Explorer' && $t_browser['browser_version'] < 11;
}

if ( is_unsupported_browser() ) {
	header('Location: ' . 'upgrade_browser.php');
	header('Content-Type: text/html');
	die;
}
