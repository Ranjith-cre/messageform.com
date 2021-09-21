<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $email_from = 'neela.57ranjith@gmail.com';
 $email_subject ="New Form Submission";
 $email_body = "User Name : $name.\n".
 "User Email: email.\n".
 "User Message: $message.\n";

 $to = "neelaranjith57@gmail.com"
 $header = "From: $email_from \r\n";
 $headers = "Reply-To : $email \r\n"
 mail($to,$email_subject,$email_body,$headers);
 header("Localtion: contactform.html")
 ?>
