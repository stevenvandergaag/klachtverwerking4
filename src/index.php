<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'henk63258@gmail.com';                     //SMTP username
    $mail->Password = 'Steven900@';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('henk63258@gmail.com', 'Henk nu');
    $mail->addAddress('stevenvegas916@gmail.com', 'Steven vegas');     //Add a recipient
    $mail->addCC('`henk63258@gmail.com`');
    $mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = '<b>dankjewel voor uw berich</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>send an email </title>
</head>
<body>
<div style="text-align: center;">

<h4 class="sent-notification"></h4>
<form id="myform">
<h2>Send an email</h2>

<label>name</label>
    <label for="name"></label><input id="name" type="text" placeholder="Enter name">
    <br><br>
<label>email</label>
    <label for="email"></label><input id="email" type="text" placeholder="Enter email">
    <br><br>
<label>klacht</label>
    <label for="subject"></label><input id="subject" type="text" placeholder="Enter subject">
    <br><br>
<p>message</p>
    <label for="body"></label><textarea id="body" rows="5" placeholder="type message"></textarea>
    <br><br>
    <button type="submit" value="formulier gegevens zijn verzonden">
</form>
</div>
