<?php
$emailTo = "gurgyar@gmail.com";
$Subject = "Meddelande från din webbsida";

// Making sure form was submitted
if (isset($_POST['message'])) {

	// Copying to better vars and securing them
	$name = Trim(stripslashes($_POST['name']));
	$email = Trim(stripslashes($_POST['email']));
	$message = Trim(stripslashes($_POST['message']));

	if (!empty($name) or !empty($email) or !empty($message) ) {

		// Prepare email body text
		$Body = "";
		$Body .= "Name: ";
		$Body .= $name;
		$Body .= "\n";
		$Body .= "Email: ";
		$Body .= $email;
		$Body .= "\n";
		$Body .= "Message: ";
		$Body .= $message;
		$Body .= "\n";

		// send email 
		$success = mail($emailTo, $Subject, $Body);

		// redirect to success page 
		if ($success){
		  $error = "Meddelande skickat!";
		}
		else{
		  $error = "Contact failed";
		}
	}else{
		$error = "Du måste fylla i alla fält!";
	}

	header("Location: index.php?error=".$error);
}
