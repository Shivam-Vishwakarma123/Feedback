<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

// $email_from = 'vishwakarma@shivam.com';
// $email_subject = "New Form Submission";
// $email_body = "User Name: $name.\n"."User Email: $visitor_email.\n"."User Message: $message.\n";
$to = "vishwakarma888115@gmail.com";
// $headers = "Form: $email_from \r\n";
// $headers = "Reply-To: $visitor_email \r\n";
mail($to, $visitor_email, $message, $name);
header("location: index.html?success");

?>
