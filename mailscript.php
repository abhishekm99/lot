<?php

$from="abhishekmalakar4@gmail.com";
$to="abhishekmalakar4@gmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mail ( $to, $name, $email, $subject, $message, "From:".$from);

Print "Your message has been sent";

?>