<?php
    if (isset($_POST['submit'])){
        $name=$_POST['name'];
        $mailFrom=$_POST['mail'];
        $message=$_POST['message'];

        $mailTo="zacktyler2014@gmail.com";
        $subject='New message from your webpage';
        $headers="From: ".$mailFrom;
        $txt="Name: ".$name.".\n\n".$message;
        
        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");

        /*if(mail($to, $subject, $message, $headers)){
            echo "<h1>Message Sent!</h1>";
        }
        else{
            echo "Error: Connection Not Established"
        }*/
    }
?>