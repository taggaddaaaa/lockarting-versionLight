<?php
// Check for empty fields
if (empty($_POST['name'])  		||
    empty($_POST['email']) 		||
    empty($_POST['phone']) 		||
    empty($_POST['message'])	||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "Aucune données du formulaire reçues";
	return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
//		Pour l'envoyer au webmaster et à Alan:
$to = "contact@lockarting.fr, sabinecaizergues@hotmail.com, lockarting.accueil@icloud.com";
//        $to = "contact@lockarting.fr";

$email_subject = "[Formulaire de contact] www.lockarting.fr";
$email_body = "Bonjour, vous avez un nouveau message depuis votre formulaire de contact de votre site internet : \n\n\n";
$email_body .= "Voici les détails:\n\nNom: $name\n\nEmail: $email_address\n\nTéléphone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@lockarting.fr\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
