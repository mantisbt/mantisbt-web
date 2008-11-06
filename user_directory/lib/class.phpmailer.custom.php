<?php	
	require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'class.phpmailer.php' );

	function myMailer( $p_body, $p_to_address, $p_reply_address = '', $p_is_html = true ) {
		$mail = new PHPMailer();

		$mail->IsSendmail();
		#$mail->IsSMTP(); // telling the class to use SMTP
		#$mail->Host = SMTP_SERVER; // SMTP server
		#$mail->Username = SMTP_USERNAME;
		#$mail->Password = SMTP_PASSWORD;
		$mail->SMTPAuth = true;

		if ( $p_is_html ) {
			$mail->IsHTML( true );
		}

		$mail->From = FROM_MAIL;
		$mail->FromName = FROM_NAME;
		$mail->AddAddress( $p_to_address );
		$mail->AddReplyTo( $p_reply_address );
		$mail->Subject = MAIL_SUBJECT;
		$mail->Body = $p_body;
		$mail->WordWrap = WORDWRAP;
	
		return $mail;
	}
?>
