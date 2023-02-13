<?php
    $name = $_POST['Name'];
    $visitor_email = $_POST ['email'];
    $message = $_POST['message']

    $email_from ='marcomazzavt1@gmail.com';

    $email_subject = 'New mail';
    $email_body = "User Name: $name.\n".
        "User Email:$visitor_email.\n". 
            "User Message: $message.\n".


    $to = 'marcomazzarimoldi@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Replay-to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);

    header ("Location: index.html");



?>