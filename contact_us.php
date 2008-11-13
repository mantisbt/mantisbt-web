<?php
	require_once ( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'user_directory_config.php' );
	require_once( LIB_DIR . '/hn_captcha.class.php' );
	require_once( LIB_DIR . '/class.phpmailer.custom.php' );

	$t_sub_title = "Contact Us";

	include( "top.php" );
?>

<h4>Contact Us</h4>

<?php
	# make captcha case insensitive
	if ( isset( $_POST['private_key'] ) ) {
		$_POST['private_key'] = strtoupper( $_POST['private_key'] );
	}

	$f_contact_name = gpc_strip_slashes( isset( $_POST['contact_name'] ) ? $_POST['contact_name'] : '' );
	$f_contact_email = gpc_strip_slashes( isset( $_POST['contact_email'] ) ? $_POST['contact_email'] : '' );
	$f_subject = gpc_strip_slashes( isset( $_POST['subject'] ) ? $_POST['subject'] : '' );
	$f_email_body = gpc_strip_slashes( isset( $_POST['email_body'] ) ? $_POST['email_body'] : '' );

	$g_error ='';
	$t_show_form = true;

	function checkForm(){
		global $g_error, $f_contact_name, $f_contact_email, $f_subject, $f_email_body;

		if ( !isset( $f_contact_name ) || trim( $f_contact_name ) == '' ) {
			$g_error .= 'Name is a required field.<br />';
		}

		if ( !isset( $f_contact_email ) || trim( $f_contact_email ) == '' ) {
			$g_error .= 'Email is a required field.<br />';
		} else {
			/* does work with blah@blah.com.au
			if ( !eregi( "^[[:alnum:]]+\@[[:alnum:]]+\.[a-z]{2,4}$", $f_contact_email ) ) {
				$g_error .= 'Email address is invalid.<br />';
			}
			*/
		}

		if ( !isset( $f_subject ) || trim( $f_subject ) == '' ) {
			$g_error .= 'Subject is a required field.<br />';
		}

		if ( !isset( $f_email_body ) || trim( $f_email_body ) == '' ) {
			$g_error .= 'Email Body is a required field.<br />';
		}
	}

	$captcha =& new hn_captcha( $CAPTCHA_INIT );

	if ( isset( $_POST['issubmit'] ) ) {
		switch( $captcha->validate_submit() ) {
			// was submitted and has valid keys
			case 1:
				// PUT IN ALL YOUR STUFF HERE //
				checkForm();

				if ( $g_error == '' ) {
					$f_email_body .= "\n\n--------------------------------------\nSent using mantisbt.org Contact Us page\n";
					$mailer = myMailer( $f_email_body, MODERATOR_MAIL, $f_contact_email, false );
					$mailer->Subject = $f_subject;
					$mailer->From = $f_contact_email;
					$mailer->FromName = $f_contact_name;

					if ( !$mailer->Send() ) {
						//not ok
						echo "An error occurred while sending the message.  Please send an email directly to vboctor -at- users -dot- sourceforge -dot- net.";
						$t_show_form = false;
					} else {
						//ok
						echo "Thanks for your message.  We will reply to you shortly.";
						$t_show_form = false;
					}
				}
				break;

			// was submitted with no matching keys, but has not reached the maximum try's
			case 2:
				$g_error .= 'Your Captcha input is not valid.<br />Please try again.';
				break;

			// was submitted, has bad keys and also reached the maximum try's
			case 3:
				break;

			// was not submitted, first entry
			default:
				$g_error .= 'Not ok. First entry.';
				break;
		}

		if ( $g_error != '' ) {
			echo "<p>The following errors were encountered:<br /><b>$g_error</b></p>";
		}
	}

	if ( $t_show_form ) {
?>

<p align="left">Please use the form below to email us with any queries that you may have.</p>

<div class="spotlight">
<p><big><strong><font color="red">For questions relating to how to use or configure MantisBT, please use the <a href="http://www.mantisbt.org/forums/">forums</a>. Please understand that the MantisBT developers cannot offer personal support.</font></strong></big></p>
</div>

<br />
<form name="frmAddEntry" method="post" onsubmit="return v.exec()" action="">

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
			<td style="padding:10px;">Subject:</td>
			<td style="padding:10px;"><input style="width:270px;" name="subject" type="text" id="subject" value="<?php echo htmlspecialchars( $f_subject ); ?>" /></td>
		</tr>
		<tr>
			<td width="20%" style="padding:10px;">Body:</td>
			<td width="80%" style="padding:10px;"><textarea name="email_body" id="email_body" style="height:100px; width:270px; font-size:12px; margin:0; padding:0;" rows="6" cols="40"><?php echo htmlspecialchars( $f_email_body ); ?></textarea></td>
		</tr>
		<tr>
			<td style="padding:10px;"></td>
			<td style="padding:10px;"><?php echo $captcha->display_captcha()?><br /><?php if ( isset( $captcha->msg1 ) ) { echo $captcha->msg1; } ?></td>
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

<script type="text/javascript">

	var o_fields = {
		'contact_name':{'l':'Contact Name','r':true},
		'contact_email':{'l':'Email Address','r':true, 'f':'email'},
		'subject':{'l':'Subject','r':true},
		'email_body' : {'l':'Body','r':true},
		'private_key' : {'l':'Captcha','r':true, 'mn':5}
	}


	var v = new validator('frmAddEntry', o_fields, {'to_disable' : ['Submit'],'alert' : 1});

</script>
<?php
	}

	include( 'bot.php' );
?>
