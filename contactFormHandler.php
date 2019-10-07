<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['subject'];
    $subject = $_POST['services'];

    $mailTo = "big@bigittech.com";
    $headers = "From :".$visitor_email;
    $txt = "Subject: ".$subject." email from ".$name.".\n\n".$message;

    mail($mailTo, $headers, $txt);
    header("Location:index.html")
?>