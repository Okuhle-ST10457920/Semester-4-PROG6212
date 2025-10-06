<?php
$name = $_POST['fullName'];
$number = $_POST['phoneNumber'];
$email = $_POST['email'];
$description = $_POST['message'];

$email_from = "okuhlemkhutshulwa@gmail.com";

$email_subject = "New Form Submission";

$email_body = "User full name: $name.\n".
"User phone number: $number.\n".
"User email: $email.\n".
"User message: $message.\n";

$to = "ST10457920@rcconnect.edu.za";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: subscribe.html");
?>