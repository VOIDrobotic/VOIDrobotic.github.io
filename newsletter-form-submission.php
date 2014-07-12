<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: newsletter.html'); exit;
}
	
// get the posted data
$name = $_POST['contact_name'];
$email_address = $_POST['contact_email'];
	
// check that a name was entered
if (empty($name))
    $error = 'You must enter your name.';
// check that an email address was entered
elseif (empty($email_address)) 
    $error = 'You must enter your email address.';
// check for a valid email address
elseif (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email_address))
    $error = 'You must enter a valid email address.';
		
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: contact.php?e='.urlencode($error)); exit;
}

$headers = "From: $email_address\r\n"; 
$headers .= "Reply-To: $email_address\r\n";

// write the email content
$email_content = "Name: $name\n";
$email_content .= "Inscription newsletter\n";
$email_content .= "Email Address: $email_address\n";
	
// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ('llombaxx@gmail.com', 'VOIDrobotic - Inscription Newsletter', $email_content, $headers);
mail ('ferrari.jerome@gmail.com', 'VOIDrobotic - Inscription Newsletter', $email_content, $headers);
mail ('contact@voidrobotic.com', 'VOIDrobotic - Inscription Newsletter', $email_content, $headers);
	
// send the user back to the form
header('Location: index.html?s='.urlencode('Thank you for your message.')); exit;

?>