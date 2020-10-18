<?php

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';*/

//----------------------------------------
function email($list)
{

	try {
	    $correoTo = $list['correo'];
		$nombre = $list['nombre'];
		$marca = $list['marca'];
		$modelo = $list['modelo'];
		$correo = 'confirmation@cabezasrentacar.com';
		$fech_in = $list['f_recogida'];
		$fecha_fin = $list['f_entrega'];
	
		$uniq = uniqid('np');

		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: $correo \r\n";
		$headers .= "Subject: Text mail\r\n";

		$headers .= "Content-Type: multipart/alternative;boundary=" . $uniq . "\r\n";

		$mensaje = "";
		$mensaje .= "\r\n\r\n--" . $uniq . "\r\n";
		$mensaje .= "Content-Type: text/html;charset=utf-8\r\n\r\n";
		$mensaje .=
			"<html> 
				<head></head>
				<body> 
					$nombre
					<br>Le saluda el equipo de Cabezas Rent a Car, confirmando su reserva para el auto:
					<br><b>Marca:</b> $marca. 
					<br><b>Modelo:</b> $modelo.
					<br><b>Fecha de inicio de alquiler:</b> $fech_in.
					<br><b>Fecha de finalización de alquiler:</b> $fecha_fin.
					
				</body> 
			</html>";

		$asunto = 'Confirmación de Reserva Cabezas Rent a Car';
		for ($x = 0; $x <= 0; $x++) {
			$req = mail($correoTo, $asunto, $mensaje, $headers);
			$correoTo="";
		}
		//if ($req) return true;
		//else return false;
	} catch (Exception $e) {
		return false;
	}
}