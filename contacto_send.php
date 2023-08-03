<?php
require("class.phpmailer.php");
require("class.smtp.php");


$recaptcha = $_POST["g-recaptcha-response"];
 
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret' => '6Lc_7sUZAAAAAHjqPVtPbaht41G-YBPaWp4VkBW0',
	'response' => $recaptcha
);
$options = array(
	'http' => array (
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);


$response = 'error';

$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);

if ($captcha_success->success) {

	if ( !isset($_POST["nombre"]) || !isset($_POST["email"]) || !isset($_POST["telefono"]) || !isset($_POST["localidad"]) || !isset($_POST["mensaje"])  ) {
	die ("Es necesario completar todos los datos del formulario");
	}


	
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$telefono = $_POST["telefono"];
	$localidad = $_POST["localidad"];
	$mensaje = $_POST["mensaje"];

	$smtpHost = "c1371310.ferozo.com"; // modificar esto
	$smtpUsuario = "info@bollitoscrocantes.com.ar"; // modificar esto
	$smtpClave = "Croca3849"; // modificar esto
	$emailDestino = "info@bollitoscrocantes.com.ar"; // modificar esto

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->Port = 587; 
	$mail->IsHTML(true); 
	$mail->CharSet = "utf-8";
	$mail->Host = $smtpHost; 
	$mail->Username = $smtpUsuario; 
	$mail->Password = $smtpClave;

	$mail->From = $email;
	$mail->FromName = $nombre;
	$mail->AddAddress($emailDestino);

	$mail->Subject = "Consulta via web"; 
	$mensajeHtml = nl2br($mensaje);
	$mail->Body = "
		<b>Nombre y/o Empresa:</b> ".$nombre."<br />
		<b>E-mail:</b> ".$email."<br />
		<b>Teléfono:</b> ".$telefono."<br />
		<b>Localidad:</b> ".$localidad."<br />		
		<b>Consulta:</b> ".$mensaje."<br />";
		

	$estadoEnvio = $mail->Send(); 
	if($estadoEnvio){	   
		$response = 'ok';		
	}

}else{
	$response = 'errorcaptcha';
}

echo json_encode(array('status' => $response));

?>