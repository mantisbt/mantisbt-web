<?php
// The following file should include the following defines:
// DB_NAME - Database Name
// DB_USER - Database User Name
// DB_PASSWORD - Database Password
// DB_HOST - Database Host
// SMTP_SERVER - SMTP Server Host Name
// SMTP_USERNAME - SMTP User Name used for authentication
// SMTP_PASSWORD - SMTP Password used for authentication
// FROM_MAIL - Email address to send emails from for user directory related emails.
// FROM_NAME - Name to associate with the FROM_EMAIL
// TIME_FORMAT - e.g. m.d.y H:i
// MODERATOR_MAIL - The email address of the moderator for the directory entries and to receive the contact us messages.
// PRODUCTION_MODE - true or false.
// DOCUMENT_ROOT: e.g. $_SERVER['DOCUMENT_ROOT'] . '/'
// DOCUMENT_WEB_ROOT: e.g. 'http://' . $_SERVER['HTTP_HOST'] . '/'
include_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory' . DIRECTORY_SEPARATOR . 'user_directory_config_inc.php' );

/*
*  In production mode we do not show error messages
*  on the Web browser since it can lead to security leaks
*  Each application should record errors using PEAR Log()
*  facility instead
*/

if ( PRODUCTION_MODE ) {
	error_reporting( 0 );
} else {
	error_reporting( E_ALL );
}

// Script name
define( 'PHP_SELF', $_SERVER['PHP_SELF'] );

// Start session
session_start();

// Component paths
define('LIB_DIR',		DOCUMENT_ROOT		. 'user_directory/lib/');
define('IMAGE_DIR',		DOCUMENT_ROOT		. 'user_directory/images/');
define('COMMON_CSS', 	DOCUMENT_WEB_ROOT	. 'user_directory/css/style.css');
define('COMMON_JS', 	DOCUMENT_WEB_ROOT	. 'user_directory/js/validator.js');

// Database class files
define( 'CLASS_MANTIS_UD', LIB_DIR . 'mantis_user_directory_entry.php' );

// Libraries using
include_once( LIB_DIR . 'class.database.php' );

// Status Level
define( 'Submitted', '0' );
define( 'Confirmed', '1' );
define( 'Approved', '2' );

define( 'Hi_Profile_No', '0' );
define( 'Hi_Profile_Yes', '1' );

// Wrapping setting for Emails Sent
define( 'WORDWRAP', '70' );

// Request Email Validation
define( 'MAIL_SUBJECT', "'{%COMPANY%}' Email Verification" );
define( 'MAIL_BODY', "{%NAME%},\n\nPlease click the following link to verify your email address: ". DOCUMENT_WEB_ROOT . "/directory_entry_verify.php?id={%HASH%}\n\nThanks." );

// Successful Validation of mail
define( 'EMAIL_VERIFIED', "Your email address has been validated successfully.  The directory entry will appear as soon as it is approved by the administrator.\nThanks for registering in MantisBT Users directory.");

// Email Approved
define( 'MAIL_SUBJECT_APPROVED', "'{%COMPANY%}' Approved" );
define( 'MAIL_BODY_APPROVED', "{%NAME%},\n\nYour submission to MantisBT Users Directory has been approved by the administrator.  It should now be visible online on http://www.mantisbt.org/directory.php.\n\nThanks again for taking the time to register.\n.");

// High Profile icon

// CAPTCHA ConfigArray
	$CAPTCHA_INIT = array(
            'tempfolder'     => 'user_directory/tmp/',      // string: absolute path (with trailing slash!) to a writeable tempfolder which is also accessible via HTTP!
			'TTF_folder'     => LIB_DIR, // string: absolute path (with trailing slash!) to folder which contains your TrueType-Fontfiles.
                                // mixed (array or string): basename(s) of TrueType-Fontfiles
			'TTF_RANGE'      => array('hurryup.TTF','JACOBITE.TTF','LYDIAN.TTF','MREARL.TTF','RUBBERSTAMP.TTF','ZINJARON.TTF'),
		//	'TTF_RANGE'      => 'COMIC.TTF',

            'chars'          => 5,       // integer: number of chars to use for ID
            'minsize'        => 20,      // integer: minimal size of chars
            'maxsize'        => 30,      // integer: maximal size of chars
            'maxrotation'    => 25,      // integer: define the maximal angle for char-rotation, good results are between 0 and 30

            'noise'          => FALSE,    // boolean: TRUE = noisy chars | FALSE = grid
            'websafecolors'  => FALSE,   // boolean
            'refreshlink'    => TRUE,    // boolean
            'lang'           => 'en',    // string:  ['en'|'de']
            'maxtry'         => 3,       // integer: [1-9]

            'badguys_url'    => '/',     // string: URL
            'secretstring'   => 'A very, very secret string which is used to generate a md5-key!',
            'secretposition' => 15,      // integer: [1-32]

            'debug'          => FALSE
	);
?>
