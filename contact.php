<?php
 $name = $_POST['name'];
 $visitor_email = $_POST['email'];
 $message = $_POST['message'];

 $email_form = 'milosmirkovic484484@gmail.com';
 $email_subject = "New Form Submission";
 $email_body = "User Name: $name.\n".
                "User Emial: $visitor_email.\n".
                    "User Message: $message.\n";
 $to = "milosmirkovic484@hotmail.com";
     $headers = "From:  $email_form \r\n";
     $headers = "Replay-to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers );

header("Location: contact.html");




?>
