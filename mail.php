<?php
$name = $_POST['name'];

// add a variable for email
$email = $_POST['email'];

$phone = $_POST['phone'];

// add a variable for call
$call = $_POST['call'];

$website = $_POST['website'];

// add a variable for priority
$priority = $_POST['priority'];

$type = $_POST['type'];

// add a variable for message
$message = $_POST['message'];

$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "domgarofalo@me.com"; // place your email address here
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html'> Return Home</a>";
?>
