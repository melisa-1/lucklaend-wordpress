<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$city = $_POST['city'];
$estate = $_POST['estate'];
$mail = $_POST['mail'];
$phoneNum = $_POST['phoneNum'];
$mensaje = $_POST['mensaje'];


$header = 'From: ' . $mail . "\r\n";
$header .= 'X-Mailer: PHP/' . phpversion() . "\r\n";
$header .= 'Mime-Version: 1.0 \r\n';
$header .= 'Content-Type: text/plain';
$mensajeCorreo = "Este mensaje fue enviado por: " . $nombre . "\r\n";
$mensajeCorreo .= "Apellido: " . $apellido . "\r\n";
$mensajeCorreo .= "Ciudad: " . $city . "\r\n";
$mensajeCorreo .= "Estado: " . $estate . "\r\n";
$mensajeCorreo .= "Teléfono: " . $phoneNum . "\r\n";
$mensajeCorreo .= "Email: " . $mail . "\r\n";
$mensajeCorreo .= "Mensaje:: " . $mensaje . "\r\n";
$para = "info@lucklaend.com";
$asunto = "Contacto de sitio web";
$respuesta = mail($para, $asunto, utf8_encode($mensajeCorreo), $header);

echo json_encode(array(
 'mensaje' => sprint('El mensaje se ha enviado!'),
 'datos' => array(
  'nombre' => $nombre,
  'apellido' => $apellido,
  'city' => $city,
  'estate' => $estate,
  'mail' => $mail,
  'phoneNum' => $phoneNum,
  'mensaje' => $mensaje
 ),
 'respuesta' => $respuesta

));
