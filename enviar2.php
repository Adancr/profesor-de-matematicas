<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$phone = $_POST['phone']
$empresa = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Su celular es: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$para = 'cpmate2020@gmail.com';
$asunto = 'Mensaje de mi sitio Clases particulares';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>