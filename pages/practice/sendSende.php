<?php 
require 'C:/xampp/htdocs/phpMailer/includes.PHPMailer.php'
require 'C:/xampp/htdocs/phpMailer/includes/SMTP.php'
use PHPMailer/PHPMailer/PHPMailer;
use PHPMailer/PHPMailer/SMTP;
use PHPMailer/PHPMailer/Exception;
$mail= new PHPMailer();
$mail->SMTPSecure="tlsc";
$mail->Username="user";
$mail->password="password";
$mail->subject="subject";
$mail->setFrom("")

?>