<?php

define('LOGFILE', '../../../contactanos.txt');

$name = $_POST['name'];
$email = $_POST['email'];
$cellphone = $_POST['cellphone'];
$message = $_POST['message'];

// echo "Nombre: {$name}\nEmail: {$email}\nCellphone: {$cellphone}\nMessage:{$message}";

$to      = 'miracleleafmed@gmail.com';
$subject = 'Nuevo mensaje en Contáctanos';
$message = "Te han escrito un nuevo mensaje:\n\nNombre: {$name}\nEmail: {$email}\nCelular: {$cellphone}\nMensaje: {$message}";
$headers = 'From: wordpress@mlcolombia.com' . "\r\n" .
    'Reply-To: wordpress@mlcolombia.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers))
  echo 'OK';
else
  echo 'ERROR';

$datetime = date('Y-m-d H:i:s');
file_put_contents(LOGFILE, "{$datetime}\n\n{$message}\n\n==============", FILE_APPEND | LOCK_EX);