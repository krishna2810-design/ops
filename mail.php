<?php
$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$emp = $_POST['emp'];
$message = $_POST['message'];
$formcontent=" From: $name \n Company: $company \n Email: $email \n No of Employees: $emp \n Message: $message";
$recipient = "krishnaprasanna1995@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
