<?php

extract($_POST);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       //Enable verbose debug output
    $mail->isSMTP();                                             //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                        //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                    //Enable SMTP authentication
    $mail->Username   = 'stephane78.descarpentries@gmail.com';   //SMTP username
    // $mail->Password   = 'xxxx xxxx xxxx xxxx';                //SMTP password
    $mail->Password   = 'nknx tkdc cxto mqvn'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             //Enable implicit TLS encryption
    $mail->Port       = 465;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('stephane78.descarpentries@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = 'Email :' . $email . '<br> Nom :' . $name . '<br> Message : ' . $message;

    $mail->send();
    // echo 'Message has been sent';
    header("Location: index.php");
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header("Location: index.php#contact");
}



  









// $to = "stephane.descarpentries@lepoles.org";
// $subject = "Utilisation de mail() avec PHP depuis Windows";
// $message = "Salut, comment ça va ?";
// $message = wordwrap($message, 70, "\r\n");

// $header = [
//     "From" => "stephane78.descarpentries@gmail.com",
//     "Content-Type" => "text/plain; charset=utf-8"
// ];


// if (mail($to, $subject, $message, $headers)) {

//     echo 'Envoye !';
// } else {
//     echo 'Erreur envoi';
// }
