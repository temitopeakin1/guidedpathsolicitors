<?php
//get data from form  
$name = $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "temitopeakinmegha@gmail.com";
$subject = "Mail From guidedpathsolicitors";
$txt ="Name = ". $name . "\r\nPhone = " . $phone . "\r\nEmail = " . $email . "\r\nMessage =" . $message;
$headers = "From: noreply@guidedpathsolicitors.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
//redirect


?>