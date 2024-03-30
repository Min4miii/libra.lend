<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $to = "nshanerey@gmail.com";
        $header = "Form $email";
        $mail = mail($to, $name, $message, $header);

        if($mail){
            echo "Email Sent";
        }else{
            echo "Email sending failed.";
        }
    }
?>