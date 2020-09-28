<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Subject: $subject \n Message: $message";
$recipient = "jessebruner@outlook.com";
$subject = "$name contacted you through jessebruner.com";
$mailheader = "From: jessebruner@outlook.com \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:index.html");
//echo "Thank You!" . " -" . "<a href='contact.html' style='text-decoration:none;color:#4c4c4c;'> Return Home</a>";
?>
