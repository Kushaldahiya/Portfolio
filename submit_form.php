<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POAT["email"];
    $subject=$_POAT["subject"];
    $message=$_POAT["message"];

    $to = "kushaldahiya888@gmail.com";
    $header="From:$email\r\nReply-To: $email\r\n";

    if(mail($to, $subject, $message, $header)){
        echo "Message sent successfully!";
    }else{
        echo "Message sending failed";
    }
}
?>