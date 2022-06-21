<?php

    $to = ""; //your mail box email address
    $subject = "My subject";
    $message = isset($_POST['message']) ?? '';
    $txt = "
        <h1 style=\"text-align:center\"> you got new Feedback </h1>

        <p>Message:</p>

        <div style=\"width:100%;border:2px solid #000\">
            .$message.
        </div>

        <p> from: Contact Page (".date("Y/m/d", time()).")</p>
    
    ";
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    
    $headers = "From: Papercut@papercut.com" . "\r\n"; // replace with your SMTP server

    if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
    {
        if(mail($to,$subject,$txt,$headers))
        {
            echo "<h1>Email Sent Successfully!</h1>";

            echo $txt;
        } else {
            echo "<h1>Failed to send the email</h1>";
        }
    }

?>