<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number = $_POST['mobile'];

$to = "akcoder9@gmail.com";

$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message ."\r\n Mobile number =". $number;

$headers = "From: akcoder1@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>