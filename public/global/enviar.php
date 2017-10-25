<?php

require('swmail/lib/swift_required.php');

$nombre = 'Diego';
$telefono = '1';
$email = 'mail';

$mensaje = 'prueba';


$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com',25)
  ->setUsername('social@globalsis.com.ar')
  ->setPassword('social@1');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance('Wonderful Subject')
  ->setFrom(array('john@doe.com' => 'John Doe'))
  ->setTo(array('receiver@domain.org', 'other@domain.org' => 'A name'))
  ->setBody('Here is the message itself')
  ;

// Send the message
 try {  $mailer->send($message); } catch (Exception $e) {
var_dump($e->getMessage(), $e->getTraceAsString()); }


?>