<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\highview\PHPMailer\src\Exception.php';
require 'C:\xampp\htdocs\highview\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\highview\PHPMailer\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'sadhanaclasses101@gmail.com';
$password = 'jnlb borj aqcb mbfs';
$s_email=$_POST["s_email"];
$s_name=$_POST["s_name"];
$s_subject=$_POST["s_subject"];
$s_body=$_POST["s_body"];

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 25;

    // Recipient information
    $mail->setFrom($email, 'Sadhana Classes');
    $mail->addAddress($s_email, $s_name);
    $mail->addReplyTo($email, 'Sadhana Classes');

    //Attachments

    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        $mail->addAttachment($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }


    // Email content
    $mail->isHTML(true);
    $mail->Subject = $s_subject;
    $mail->Body    = $s_body;

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}
