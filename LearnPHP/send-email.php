<?php

$to_email = 'helloyahoobaba@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: hello@yahoobaba.com';

if(mail($to_email,$subject,$message,$headers)){
	echo "Email Sent Successfully.";
}else{
	echo "Email Failed.";
}

?>