<?php
	$f_message = stripslashes(substr( $f_message, 0, 10000 ));
	mail("kenito@300baud.org", "[Q] $f_subject", "$f_message" );

	header( "Status: 302" );
	header( "Content-Type: text/html" );
	header( "Pragma: no-cache" );
	header( "Expires: Fri, 01 Jan 1999 00:00:00 GMT" );
	header( "Cache-control: no-cache, no-cache=\"Set-Cookie\", private" );
	header( "Location: polls.php" );
?>