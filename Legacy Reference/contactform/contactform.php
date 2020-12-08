<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "jebruner1690@gmail.com";
$subject = "$name sent you a message";
$mailheader = "From: jebruner@wccnet.edu \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:../index.html");
//echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#4c4c4c;'> Return Home</a>";
?>
