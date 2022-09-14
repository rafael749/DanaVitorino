<?php

if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: https://danavitorino.com.ar" );
}

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';

$body = <<<HTML
    <h1>Mensaje enviado desde Danavitorino.com.ar</h1>
    <p>Nombre Contacto: $nombre / Su e-mail: $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$mailer = new PHPMailer();
$mailer->setFrom( $email, "$nombre" );
$mailer->addAddress('info@danavitorino.com.ar','Consultas danavitorino.com.ar');
$mailer->Subject = "Consulta Nueva";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

$rta = $mailer->send( );

//var_dump($rta);
echo "<script>alert('Correo enviado Exitosamente')</script>";
echo "<script>setTimeout(\"location.href='https://danavitorino.com.ar'\",500)</script>";
//header("Location: https://danavitorino.com.ar" );

/*
$emailDestino = 'rafaelmiranda749@gmail.com';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = "Enviado desde DanaVitorino.com";
$mensajeEnviado= $mensaje. "\nAtentamente: " . $nombre;

mail($emailDestino, $nombre,$mensajeEnviado,$header);
echo "<script>alert('Correo enviado Exitosamente')</script>";
echo "<script>setTimeOut(\"Location:'https://mirandawebsoluciones.com/danavitorino'\",1000)</script>";
*/