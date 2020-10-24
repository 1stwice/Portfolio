<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $to='zacktyler2014@gmail.com';
        $subject='New message from your webpage';
        $message="Name: ".$name."\n\n"."Message: ".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Message Sent!</h1>";
        }
        else{
            echo "Error: Connection Not Established"
        }
    }
?>