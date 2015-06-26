<?php
require 'PHPMailer/PHPMailerAutoload.php';

$name = $_POST['your-name'];
$email = $_POST['your-email'];
$phone = $_POST['your-phone'];
$message = $_POST['your-messaggio'];

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.grupposistematica.it';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'fabrizio.loreti@grupposistematica.it';                 // SMTP username
$mail->Password = 'Vale888';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = $email; //'info@sdeimobili.com';
$mail->FromName = $name;
$mail->addAddress('info@sdeimobili.com', 'Sdei Mobili');           // Name is optional
$mail->addReplyTo($email, $name);

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Richiesta Informazioni';
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->send()) {
    echo '0';
} else {
    echo '1';
}
?>