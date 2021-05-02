<?php
    // print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = '';
    if( trim($email) == '')
        $error = "Enter your email";
    else if( trim($message) == '')
        $error = 'Enter message'; 
    else if( strlen($message) < 10)
        $error = 'Message too short';
        
    if( $error != ''){
        echo $error;
        exit;
    }

    $subject = "=?utf-8?B?".base64_encode("TEST message")."?=";
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

    mail('starchenkogin@hotmail.com', $subject, $message, $headers);

     header('Location: /phpNew/about.php')
?>