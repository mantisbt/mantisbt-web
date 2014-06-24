<?php

/**
 * Identify the browser name, version and platform from the user agent
 * Looks like Rafik initially copied this code from
 * http://php.net/function.get-browser.php#101125
 * @return array
 */
function getBrowser() {
	$u_agent = strtolower( $_SERVER['HTTP_USER_AGENT'] );

	# First get the platform
	if( preg_match( '/linux/', $u_agent ) ) {
		$platform = 'linux';
	} elseif( preg_match( '/macintosh|mac os x/', $u_agent ) ) {
		$platform = 'mac';
	} elseif( preg_match( '/windows|win32/', $u_agent ) ) {
		$platform = 'windows';
	}
	else {
		$platform = 'Unknown';
	}

	# Next get the name of the useragent yes seperately and for good reason
	if( preg_match( '/msie/', $u_agent ) && !preg_match( '/opera/', $u_agent ) ) {
		$bname = 'Internet Explorer';
		$ub = 'MSIE';
	} elseif( preg_match( '/firefox/', $u_agent ) ) {
		$bname = 'Mozilla Firefox';
		$ub = 'Firefox';
	} elseif( preg_match( '/chrome/', $u_agent ) ) {
		$bname = 'Google Chrome';
		$ub = 'Chrome';
	} elseif( preg_match( '/safari/', $u_agent ) ) {
		$bname = 'Apple Safari';
		$ub = 'Safari';
	} elseif( preg_match( '/opera/', $u_agent ) ) {
		$bname = $ub = 'Opera';
	} elseif( preg_match( '/netscape/', $u_agent ) ) {
		$bname = $ub = 'Netscape';
	} else {
		$bname = $ub = 'Unknown';
	}

	# finally get the correct version number
	$known = array( 'version', $ub, 'other' );
	$pattern = '#(?<browser>' . join( '|', $known ) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
	if( !preg_match_all( $pattern, $u_agent, $matches ) ) {
		# we have no matching number
		$version = '?';
	} else {
		# see how many we have
		$i = count( $matches['browser'] );
		if( $i > 1 ) {
			# we will have two since we are not using 'other' argument yet
			# see if version is before or after the name
			if( strrpos( $u_agent, 'version' ) < strrpos( $u_agent, $ub ) ) {
				$version = $matches['version'][0];
			} else {
				$version = $matches['version'][1];
			}
		} else {
			$version = $matches['version'][0];
		}

		# check if we have a number
		if( $version == '' ) {
			$version = '?';
		}
	}

	return array(
		'userAgent' => $_SERVER['HTTP_USER_AGENT'],
		'name'      => $bname,
		'version'   => $version,
		'platform'  => $platform,
		'pattern'   => $pattern,
	);
}

/**
 * Returns true if user's browser is not supported
 * @return bool
 */
function is_unsupported_browser() {
	static $unsupported;
	if( !isset( $unsupported ) ) {
		$ua = getBrowser();
		$unsupported = ( 'Internet Explorer' == $ua['name'] && '6.0' == $ua['version'] );
	}
	return $unsupported;
}
