<?php
	require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory_config.php' );
	require_once( LIB_DIR . '/hn_captcha.class.php' );
	require_once( LIB_DIR . '/class.phpmailer.custom.php' );
	include_once( CLASS_MANTIS_UD );

	$t_sub_title = 'Submit Directory Entry';

	include( "top.php" );
?>
<span class="page_title">Submit Directory Entry</span>
<hr size="1" noshade="noshade" width="100%" />

<?php
	# make captcha case insensitive
	if ( isset( $_POST['private_key'] ) ) {
		$_POST['private_key'] = strtoupper( $_POST['private_key'] );
	}

	$f_company_name = gpc_strip_slashes( isset( $_POST['company_name'] ) ? $_POST['company_name'] : '' );
	$f_contact_name = gpc_strip_slashes( isset( $_POST['contact_name'] ) ? $_POST['contact_name'] : '' );
	$f_contact_email = gpc_strip_slashes( isset( $_POST['contact_email'] ) ? $_POST['contact_email'] : '' );
	$f_website_url = gpc_strip_slashes( isset( $_POST['website_url'] ) ? $_POST['website_url'] : '' );
	$f_mantis_url = gpc_strip_slashes( isset( $_POST['mantis_url'] ) ? $_POST['mantis_url'] : '' );
	$f_comments = gpc_strip_slashes( isset( $_POST['comments'] ) ? $_POST['comments'] : '' );
	$f_hash = gpc_strip_slashes( isset( $_POST['hash'] ) ? $_POST['hash'] : '' );

	$g_error = '';
	$g_show_form = true;

	function saveValue() {
		global $f_company_name, $f_contact_name, $f_contact_email, $f_website_url, $f_mantis_url, $f_comments;

		$mantis_ud = new mantis_user_directory_entry();

		$pre = substr( md5( uniqid( rand(), true ) ), 0, 32 );
		$mantis_ud->hash = md5( $pre );
		$mantis_ud->date_submitted = date( "Y-m-d" );
		$mantis_ud->company_name = $f_company_name;
		$mantis_ud->contact_name = $f_contact_name;
		$mantis_ud->contact_email = $f_contact_email;
		$mantis_ud->website_url = $f_website_url;
		$mantis_ud->mantis_url = $f_mantis_url;
		$mantis_ud->comments = $f_comments;
		$mantis_ud->status = Submitted;
		$mantis_ud->high_profile = Hi_Profile_No;

		$mantis_ud->Save();

		return $mantis_ud;
	}

	function checkForm() {
		global $g_error, $f_contact_name, $f_contact_email, $f_company_name, $f_website_url, $f_mantis_url;

		if ( trim( $f_contact_name ) == '' ) {
			$g_error .= 'Name is a required field.<br />';
		}

		if ( !isset( $f_contact_email ) || trim( $f_contact_email ) == '' ) {
			$g_error .= 'Email is a required field.<br />';
		} else {
			/* doesn't work with abc@example.com.au email addresses.
			if ( !eregi("^[[:alnum:]]+\@[[:alnum:]]+\.[a-z]{2,4}$", $f_contact_email ) ) {
				$g_error .= 'Supplied email is not valid.<br />';
			}
			*/
		}

		if ( !isset( $f_company_name ) || trim( $f_company_name ) == '' ) {
			$g_error .= 'Company/Project is a required field.<br />';
		}

		if ( !isset( $f_website_url ) || trim( $f_website_url ) == '' ) {
			$g_error .= 'Website URL is a required field.<br />';
		}

		if ( isset( $f_website_url ) && !(strstr( $f_website_url, 'http://' ) || strstr( $f_website_url, 'https://' ) ) ) {
			$f_website_url = 'http://' . $f_website_url;
		}

		if ( isset( $f_mantis_url ) && !( strstr( $f_mantis_url, 'http://' ) || strstr( $f_mantis_url, 'https://' ) ) ) {
			if ( trim( $_POST['mantis_url'] ) != '' ) {
				$f_mantis_url = 'http://' . $f_mantis_url;
			}
		}
	}

	$captcha =& new hn_captcha( $CAPTCHA_INIT );

	if ( isset( $_POST['issubmit'] ) && $_POST['issubmit'] == 1 ) {
		switch ( $captcha->validate_submit() ) {
			// was submitted and has valid keys
			case 1:
				// PUT IN ALL YOUR STUFF HERE //
				checkForm();
				if ( $g_error == '' ) {
					$t_mantis_ud = saveValue();

					$t_body = MAIL_BODY;
					$t_body = str_replace( "{%NAME%}", $t_mantis_ud->contact_name, $t_body );
					$t_body = str_replace( "{%COMPANY%}", $t_mantis_ud->company_name, $t_body );
					$t_body = str_replace( "{%HASH%}", $t_mantis_ud->hash, $t_body );

					$t_subject = MAIL_SUBJECT;
					$t_subject = str_replace( "{%NAME%}", $t_mantis_ud->contact_name, $t_subject );
					$t_subject = str_replace( "{%COMPANY%}", $t_mantis_ud->company_name, $t_subject );
					$t_subject = str_replace( "{%HASH%}", $t_mantis_ud->hash, $t_subject );

					$mailer = myMailer( htmlspecialchars( $t_body ), $t_mantis_ud->contact_email, '', false );
					$mailer->Subject = $t_subject;

					if ( !$mailer->Send() ) {
						//not ok
						echo '<p>An error has occurred while sending the email to validate your email address.</p>';
					} else {
						//ok
						echo '<p>Thanks for registering in the users directory.  You will receive an email to validate your email address shortly.</p>';
						$g_show_form = false;
					}
				} else {
					echo "<b>$g_error</b>";
				}
				break;

			// was submitted with no matching keys, but has not reached the maximum try's
			case 2:
				echo '<p>Your captcha input is not valid.  Please try again.</p>';
				break;

			// was submitted, has bad keys and also reached the maximum try's
			case 3:
				echo '<p>was submitted, has bad keys and also reached the maximum tries.</p>';
				$g_show_form = false;
				break;

			// was not submitted, first entry
			default:
				$g_error.= "Not ok. First entry.";
				break;
		}

		$_POST['issubmit'] = '';
	}

	if ( $g_show_form ) {
?>
<p align="left">Please enter the Directory Entry details:</p>

<p>
<form name="frmAddEntry" method="post" onsubmit="return v.exec()">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="20%" style="padding:10px;">Contact Name:</td>
			<td width="80%" style="padding:10px;"><input style="width:270px;" name="contact_name" type="text" id="contact_name" value="<?php echo htmlspecialchars( $f_contact_name ); ?>" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">Email Address:</td>
			<td style="padding:10px;"><input style="width:270px;" name="contact_email" type="text" id="contact_email" value="<?php echo htmlspecialchars( $f_contact_email ); ?>" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">Company/Project Name:</td>
			<td style="padding:10px;"><input style="width:270px;" name="company_name" type="text" id="company_name" value="<?php echo htmlspecialchars( $f_company_name ); ?>" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">Website URL:</td>
			<td style="padding:10px;"><input style="width:270px;" name="website_url" type="text" id="website_url" value="<?php echo htmlspecialchars( $f_website_url ); ?>" /></td>
		</tr>
		<tr>
			<td width="20%" style="padding:10px;">MantisBT URL:<br /><em>(leave empty for private installations)</em></td>
			<td width="80%" style="padding:10px;"><input style="width:270px;" name="mantis_url" type="text" id="mantis_url" value="<?php echo htmlspecialchars( $f_mantis_url ); ?>" /></td>
		</tr>
		<tr>
			<td width="20%" style="padding:10px;">Comments:<br /><em>(testimonials or feedback about MantisBT, some will be selected to be quoted on a <a href="testimonials.php">testimonials page</a>)</em></td>
			<td width="80%" style="padding:10px;"><textarea name="comments" id="comments" style="height:100px; width:270px; font-size:12px; margin:0; padding:0;"><?php echo htmlspecialchars( $f_comments ); ?></textarea></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td style="padding:10px;"><?php echo $captcha->display_captcha()?><br><?php if ( isset( $captcha->msg1 ) ) { echo $captcha->msg1; } ?></td>
		</tr>
		<tr>
			<td style="padding:10px;">Captcha:</td>
			<td style="padding:10px;"><input type="text" name="private_key" value="" maxlength="5" size="5" /></td>
		</tr>
		<tr>
			<td style="padding:10px;">&nbsp;</td>
			<td style="padding:10px;">
				<input name="admAdd" type="submit" id="admAdd" value="Submit" />
				<input name="issubmit" type="hidden" value="1" />
			</td>
		</tr>
	</table>

</form>
</p>
<script language="JavaScript">
	var o_fields = {
		'contact_name':{'l':'Contact Name','r':true},
		'contact_email':{'l':'Email Address','r':true, 'f':'email'},
		'company_name':{'l':'Company/Project Name','r':true},
		'website_url':{'l':'Website URL','r':true},
		'private_key' : {'l':'Captcha','r':true, 'mn':5}
	}

	var v = new validator('frmAddEntry', o_fields, {'to_disable' : ['Submit'],'alert' : 1});
</script>
<?php
	}

	include( 'bot.php' );
