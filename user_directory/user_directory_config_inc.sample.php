<?php
// Database configuration
define( 'DB_HOST', 'localhost' );                       // 99% chance you won't need to change this value 
define( 'DB_NAME', '' );                        // The name of the database
define( 'DB_USER', '' );                                    // Your MySQL username
define( 'DB_PASSWORD', '' );                                    // ...and password

// Time format
define( 'TIME_FORMAT', 'm.d.y H:i' );

// PHPMailer config
define( 'SMTP_SERVER', 'smtp.mantisbt.org' );
define( 'FROM_MAIL', 'noreply@mantisbt.org' );
define( 'SMTP_USERNAME', 'noreply@mantisbt.org' );
define( 'SMTP_PASSWORD', '' );
define( 'FROM_NAME', 'Mantis User Directory' );

define( 'MODERATOR_MAIL', 'moderator@mantisbt.org' );

// Set this if this is released software
define('PRODUCTION_MODE', false);

// Paths to application
#define( 'DOCUMENT_ROOT',     $_SERVER['DOCUMENT_ROOT'] . '/' );
define( 'DOCUMENT_ROOT', '/path/to/mantisbt-web/' );
define( 'DOCUMENT_WEB_ROOT', 'http://' . $_SERVER['HTTP_HOST'] . '/' );

