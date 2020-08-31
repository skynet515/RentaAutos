<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//----------------------------------------
function email($list)
{
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);
		//Server settings
		$mail->SMTPDebug = 0;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                  // Enable SMTP authentication
		$mail->Username   = 'temprcar@gmail.com';                     // SMTP username
		$mail->Password   = 'rentacar#318';                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('temprcar@gmail.com', 'Cabezas RentaCars');
		$mail->addAddress($list['correo'], $list['correo']);     // Add a recipient
		//$mail->addAddress('ellen@example.com');               // Name is optional
		//	$mail->addReplyTo('info@example.com', 'Information');
		//	$mail->addCC('cc@example.com');
		//	$mail->addBCC('bcc@example.com');

		// Attachments
		/*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name

		// Content
		$mail->isHTML(true);                                 // Set email format to HTML
		$mail->Subject = 'Confirmación de Reservación';
		$mail->Body    = '<b>' . $list['nombre'] . ':</b> <br> Su reserva fue realizada con Éxito';
		//	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		return true;
	} catch (Exception $e) {
		return false;
	}
}
