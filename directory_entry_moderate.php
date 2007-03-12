<?php
	require_once ( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory_config.php' );
	require_once ( LIB_DIR . '/class.phpmailer.custom.php' );
	include_once ( CLASS_MANTIS_UD );

	$t_sub_title = 'Directory Entry Moderation';

	include( "top.php" );
?>
<span class="page_title">Directory Entry Moderation</span>
<hr size="1" noshade="noshade" width="100%" />

<?php
	$g_msg = '';

	if ( isset( $_GET['hash'] ) && strlen( $_GET['hash'] ) == 32 ) {
		$mantis_ud = new mantis_user_directory_entry();
		$mantis_ud = $mantis_ud->GetByHash( $_GET['hash'] );

		if ( $mantis_ud->id != 0 || $mantis_ud->id != '' ) {
			if ( isset( $_GET['del'] ) && $_GET['del'] == 1 ) {
				$mantis_ud->Delete();
				$g_msg = 'Entry Successfully Deleted';
			} else {
				if ( $mantis_ud->status == Approved ) {
					$g_msg = 'Entry Already Approved';
				} else if ( $mantis_ud->status < Confirmed ) {
					$g_msg = 'Entry Email Not Confirmed';
				} else {
					$mantis_ud->status = Approved;

					$mantis_ud->high_profile = isset($_GET['profile']) ? $_GET['profile'] : 0;

					$mantis_ud->Save();

					$t_body = MAIL_BODY_APPROVED;
					$t_body = str_replace( "{%NAME%}", $mantis_ud->contact_name, $t_body );
					$t_body = str_replace( "{%COMPANY%}", $mantis_ud->company_name, $t_body );

					$t_subject = MAIL_SUBJECT_APPROVED;
					$t_subject = str_replace( "{%NAME%}", $mantis_ud->contact_name, $t_subject );
					$t_subject = str_replace( "{%COMPANY%}", $mantis_ud->company_name, $t_subject );

					$mailer = myMailer( $t_body, $mantis_ud->contact_email, '', false );
					$mailer->Subject = $t_subject;

					if ( !$mailer->Send() ) {
						//not ok
						$g_msg = 'Directory Entry approved.  However, failed to send confirmation email.';
					} else {
						//ok
						if ( $mantis_ud->high_profile ) {
							$g_msg = 'High profile directory entry approved and confirmation email sent successfully.';
						} else {
							$g_msg = 'Directory entry approved and confirmation email sent successfully.';
						}
					}
				}
			}
		} else {
			$g_msg = 'Invalid Key or Entry Already Deleted';
		}
	} else {
		$g_msg = 'There are no entries with the specified hash.';
	}

	//Cleanup Process
	$mantis_ud = new mantis_user_directory_entry();
	$mantis_ud = $mantis_ud->Getmantis_user_directory_entryToCleanList(date('Y-m-d',time()-(3600*24*7)));

	for ( $i = 0; $i < count( $mantis_ud ); $i++ ) {
		$mantis_ud[$i]->Delete();
	}

	$tempfolder = $CAPTCHA_INIT['tempfolder'];
	if ( $handle = @opendir( $tempfolder ) )
	{
		while ( false !== ( $file = readdir( $handle ) ) )
		{
			if ( !is_file( $tempfolder.$file ) ) {
				continue;
			}

			// check for name-prefix, extension and filetime
			if ( strrchr( $file, '.' ) == '.jpg' )
			{
				if ( ( time() - filemtime( $tempfolder.$file ) ) >= 600 )
				{
					$res = @unlink( $tempfolder.$file );
				}
			}
		}

		closedir( $handle );
	}

	echo "<p>$g_msg</p>";

	include( 'adsense_vertical_inc.php' );
	include( 'bot.php' );
?>