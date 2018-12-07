<?php

//Formulaire de contact
if(!empty($_POST))
{
    //si le prenom est vide
	if(empty($_POST["name"])){
        // ajouter une erreur au tableau $error
		array_push($errors, "veuillez saisir votre nom");
	}

    //si le telephone est vide
	if(empty($_POST["phone"])){
        // ajouter une erreur au tableau $error
		array_push($errors, "veuillez rentrer votre téléphone");
	}

    //si l email est vide
	if(empty($_POST["email"])){
        // ajouter une erreur au tableau $error
		array_push($errors, "veuillez rentrer votre e.mail");
	}
	else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==FALSE){
		array_push($errors, "email non valide");
	}

    // si le message est vide
	if(empty($_POST["message"])){
        // ajouter une erreur au tableau
		array_push($errors, "veuillez rentrer un message");
	}

    //si $error est vide
	if(empty($errors)){
//		Pour l'envoyer au webmaster et à Alan:
//        $to = "contact@lockarting.fr, sabinecaizergues@hotmail.com, lockarting.accueil@icloud.com";
        $to = "contact@lockarting.fr";

        $subject = "[Formulaire de contact] www.lockarting.fr";

        $message = "Bonjour, vous avez un nouveau message depuis votre formulaire de contact de votre site internet : \n\n\n";
        $message .= "Auteur : ".$_POST["name"]."\n";
        $message .= "Email du contact : ".$_POST["email"]."\n";
        $message .= "Tel. du contact : ".$_POST["phone"]."\n\n\n";
        $message .= "Message : \n\n".$_POST["message"];

        $headers = "From : ".$_POST["email"]."\r\n" . "Reply-To: ".$_POST["email"]."\r\n" . "X-Mailer: PHP/" . phpversion();

        mail($to, $subject, $message, $headers);

		$success = "Votre message a bien été envoyé.";
	}
}
