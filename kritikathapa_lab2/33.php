<?php
$to = "example@gmail.com";
$subject = "Email Notification";
$message = "This is a notification email.";
$headers = "From: admin@gmail.com";

if (mail($to, $subject, $message, $headers))
    echo "Email sent successfully!";
else
    echo "Email sending failed.";
?>