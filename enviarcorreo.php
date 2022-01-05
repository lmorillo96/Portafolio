<?php

$destino = "leandro.m9601@gmail.com";

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = "Envio desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre :" . $nombre . "\n" .  "Email :" . $email . "\n" . "Mensaje :" . $mensaje;

mail($destino, $mensaje, $mensajeCompleto, $header);
header('Location: index.html');