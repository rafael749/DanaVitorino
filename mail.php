<?php
/*
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: http://cliente14-mirandawebsoluciones-com.preview-domain.com/" );
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$mailer = new PHPMailer();
$mailer->setFrom( $email, "$nombre" );
$mailer->addAddress('rafaelmiranda749@gmail.com','Sitio web');
$mailer->Subject = "Mensaje web: $asunto";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

$rta = $mailer->send( );

var_dump($rta);
header("Location: http://cliente14-mirandawebsoluciones-com.preview-domain.com/" );
*/

$emailDestino = 'rafaelmiranda749@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde DanaVitorino.com";
$mensajeEnviado= $mensaje. "\nAtentamente: " . $nombre;

mail($emailDestino, $mensajeEnviado,$header);
echo "<script>alert('Correo enviado Exitosamente')</script>";
echo "<script>setTimeOut(\"location.href='index.html'\",1000)</script>";