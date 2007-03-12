<?php
	require_once ( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory_config.php' );
	require_once ( LIB_DIR . '/class.phpmailer.custom.php' );
	include_once ( CLASS_MANTIS_UD );

	$t_sub_title = 'Directory Entry Verification';

	include( "top.php" );
?>
<span class="page_title">Directory Entry Verification</span>
<hr size="1" noshade="noshade" width="100%" />

<?php
	$g_msg = '';

	if ( isset( $_GET['id'] ) && strlen( $_GET['id'] ) == 32 ) {
		$mantis_ud = new mantis_user_directory_entry();

		$mantis_ud = $mantis_ud->GetByHash( $_GET['id'] );

		if ( $mantis_ud->id != 0 || $mantis_ud->id != '' ) {
			if ( $mantis_ud->status > Submitted ) {
				$g_msg = 'Your directory entry has now been verified and is pending administrator\'s approval to appear on the site.  Thanks for your registration.';
			} else {
				$mantis_ud->status = Confirmed;
				$mantis_ud->Save();

				$t_contact_name = htmlspecialchars( $mantis_ud->contact_name );
				$t_company_name = htmlspecialchars( $mantis_ud->company_name );
				$t_contact_email = htmlspecialchars( $mantis_ud->contact_email );
				$t_website_url = htmlspecialchars( $mantis_ud->website_url );
				$t_mantis_url = htmlspecialchars( $mantis_ud->mantis_url );
				$t_comments = htmlspecialchars( $mantis_ud->comments );
				$t_hash = htmlspecialchars( $mantis_ud->hash );

				$t_body = "The following directory entry is pending approval.\n\nName: $t_contact_name\nCompany/Project: $t_company_name\nEmail: $t_contact_email\nWebURL: $t_website_url\nMantis URL: $t_mantis_url\nComments:\n$t_comments\n\n";

				$t_body .= 'Approve (High Profile): ' . DOCUMENT_WEB_ROOT . "directory_entry_moderate.php?profile=1&hash=$t_hash\n";
				$t_body .= 'Approve: ' . DOCUMENT_WEB_ROOT . "directory_entry_moderate.php?profile=0&hash=$t_hash\n";
				$t_body .= 'Delete Entry: ' . DOCUMENT_WEB_ROOT . "directory_entry_moderate.php?del=1&hash=$t_hash\n\n";

				$mailer = myMailer( $t_body, MODERATOR_MAIL, '', false );
				$mailer->Subject = "Request approval for '$t_company_name'";

				if ( !$mailer->Send() ) {
					//not ok
					$g_msg = 'Unable to send email to administrator to request approval.  Please contact the administrator directly.';
				} else {
					//ok
					$g_msg = EMAIL_VERIFIED;
				}
			}
		} else {
			$g_msg = 'Invalid Key';
		}
	} else {
		$g_msg .= '<p>Invalid directory entry id, please check the URL.</p>';
	}
?>
	<p><?php echo $g_msg ?></p>

<?php
	include( 'adsense_vertical_inc.php' );
	include( 'bot.php' );
?>