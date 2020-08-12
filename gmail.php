<?php

$name = $_POST['name'];
$visitor_email = $_POST['eamli'];
$message = $_POST['message'];

$email_form = 'vishwakarma888115@gmail.com';
$email_subject = "New Form Submission";
$email_body = "User Name: $name.\n"."User E-mail: $visitor_email.\n"."User Message: $message.\n";
$to = "shiva83023@gmail.com"
$headers = "Form: $email_form \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to, $email_subject, $email_body, $headers);
header("Location: gmail.html");

?>