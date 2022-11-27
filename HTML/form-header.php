<?php
$name = $_POST["name"];
$visitor_email = $_POST['email'] 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
 

$email_from ="info@yourwebiste.com";

$email_subject ="New form submission";

$email_body = "User name: $name./n".
              "User Email: $subject./n".
              "subject: $visitor_email/n".
              "User message:$message ./n";
?>