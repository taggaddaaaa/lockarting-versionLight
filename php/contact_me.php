<?php
// Check for empty fields
if (empty($_POST['name'])  		||
    empty($_POST['email']) 		||
    empty($_POST['phone']) 		||
    empty($_POST['message'])	||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
	echo "Aucune données du formulaire reçues";
	return false;
} else {
	$name = $_POST['name'];
	$email_address = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	/**
	 * CREATE THE EMAIL AND SEND IT
	 * 1: Declaration of destination.
	 * 2: Filter on servers that have encountered bugs with the newline.
	 * 3: Message declaration of the e-mail in text version
	 * 4: Creation of the subject
	 * 5: Creation of the e-mail header
	 * 6: Creation of the message
	 * 7: Sending the email
	 */
	$mail = 'contact@lockarting.fr'; // For lockarting
//	$mail .= ', sabinecaizergues@gmail.com'; // Add for debugging.

	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
		$simple_passage_ligne = "\r\n";
		$double_passage_ligne = "\r\n\r\n";
	} else {
		$simple_passage_ligne = "\n";
		$double_passage_ligne = "\n\n";
	}

	$message_txt = "Bonjour," .$simple_passage_ligne.  "vous avez un nouveau message depuis votre formulaire de contact de votre site internet:".$double_passage_ligne;
	$message_txt .= "Auteur: ".$name.$simple_passage_ligne;
	$message_txt .= "Email du contact: ".$email_address.$simple_passage_ligne;
	$message_txt .= "Tel. du contact: ".$phone.$double_passage_ligne;
	$message_txt .= "Message:".$simple_passage_ligne.$message;

	$subject = "[Formulaire de contact] www.lockarting.fr";

	$header = "From: \"Loc'karting\"<noreply@lockarting.fr>".$simple_passage_ligne;
	$header.= "Reply-to: \"$email_address\" <$email_address>".$simple_passage_ligne;
	$header.= "MIME-Version: 1.0".$simple_passage_ligne;
	$header.= "Content-Type: text/plain; charset=\"ISO - 8859 - 1\"".$simple_passage_ligne;
	$header.= "Content-Transfer-Encoding: 8bit".$simple_passage_ligne;

	$email_body= $message_txt.$simple_passage_ligne;

	mail($mail,$subject,$email_body,$header);
	return true;
}
