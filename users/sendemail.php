<?php

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPmail/Exception.php';
require 'PHPmail/PHPMailer.php';
require 'PHPmail/SMTP.php';
//objectname->member

$mail = new PHPMailer;

$mail->isSMTP();                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers
$mail->SMTPAuth = true;               // Enable SMTP authentication
$mail->Username = 'arya.karambelkar@somaiya.edu';   // SMTP username
$mail->Password = 'Adsk@5678';   // SMTP password
$mail->SMTPSecure = 'ssl';            // Enable TLS encryption, `ssl` also accepted
$mail->SMTPDebug = 0;
$mail->Port = 465;                    // TCP port to connect to

// Sender info
$mail->setFrom('arya.karambelkar@somaiya.edu', 'Sent from Arya');
//$mail->addReplyTo('xyz@gmail.com', 'xyz account');

// Add a recipient
$mail->addAddress('arya.karambelkar@somaiya.edu', 'Recieved by Arya');

//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

// Set email format to HTML
$mail->isHTML(true);

// Mail subject
$mail->Subject = 'Welcome ;)';

// Mail body content
$bodyContent = '<h1>Welcome to Blood Bank Management System!</h1>';
$bodyContent .= '<p>We are thankful to you that you decided to join our community and reach out your hands for the others in need. Just by registering into our Blood Bank Management System you have made an agreement with us that you are ready to donate and will be available whenever we will need you.</b></p>';
$mail->Body    = $bodyContent;

// Send email
if($mail->send()) {
    header("Location: http://localhost/WP/Blood-Donation-Mini-Project/users/register.php");
} else {
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
}

?>
