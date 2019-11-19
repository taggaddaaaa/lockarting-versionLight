<?php

if (empty($_POST['fname'])    ||
    empty($_POST['lname'])    ||
    empty($_POST['email'])    ||
    empty($_POST['phone'])    ||
    empty($_POST['car'])      ||
    empty($_POST['birth'])    ||
    empty($_POST['identity']) ||
    empty($_FILES["identity"]) && $_FILES['identity']['name'] != "" ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    echo "Aucune données du formulaire reçues";
    return false;
} else {
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $email = htmlentities($_POST['email']);
    $phone = htmlentities($_POST['phone']);
    $car = htmlentities($_POST['car']);
    $birth = htmlentities($_POST['birth']);
    $nom_fichier = $_FILES['identity']['name'];
    $source = $_FILES['identity']['tmp_name'];
    $type_fichier = $_FILES['identity']['type'];
    $taille_fichier = $_FILES['identity']['size'];



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
    $mail = 'job@lockarting.fr'; // For everyone
    $mail .= ', sabinecaizergues@gmail.com'; // Add for debugging.

    $subject = "[JOB CANDIDAT] www.lockarting.fr";
    $boundary = md5(rand()); // clé aléatoire de limite

    function clean_string($string) {
        $bad = array("content-type","bcc:","to:","cc:","href");
        return str_replace($bad,"",$string);
    }

    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
        $simple_passage_ligne = "\r\n";
        $double_passage_ligne = "\r\n\r\n";
    } else {
        $simple_passage_ligne = "\n";
        $double_passage_ligne = "\n\n";
    }

    $header = "From: \"Loc'karting\"<noreply@lockarting.fr>" . $simple_passage_ligne;
    $header .= "Reply-to: \"$email\" <$email>" . $simple_passage_ligne;
    $header .= "MIME-Version: 1.0" . $simple_passage_ligne;
    $header .= "Content-Type: text/plain; charset=\"ISO - 8859 - 1\"" . $simple_passage_ligne;
//    $header .= "Content-Transfer-Encoding: 8bit" . $simple_passage_ligne;

    //Contenu du message (alternative pour deux versions ex:text/plain et text/html
    $header .= 'Content-Type: multipart/mixed; boundary='.$boundary .' '. $simple_passage_ligne;

    $message_txt = "Bonjour," . $simple_passage_ligne . "vous avez un nouvelle demande de recrutement à traiter: " . $double_passage_ligne;
    $message_txt .= "Prénom: " . $fname . $simple_passage_ligne;
    $message_txt .= "Nom: " . $lname . $simple_passage_ligne;
    $message_txt .= "Email: " . $email . $simple_passage_ligne;
    $message_txt .= "Tel.: " . $phone . $double_passage_ligne;
    if (!$car) {
        $message_txt .= "Ce candidat n'a pas renseigné ou n'est pas véhiculé." . $double_passage_ligne;
    } else {
        $message_txt .= "Ce candidat est véhiculé." . $double_passage_ligne;
    }
    if ($_FILES['identity']['size']) {
        $message_txt .= "La pièce d'identité du candidat se trouve en pièce jointe." . $simple_passage_ligne;
    }


    $email_message = '--' . $boundary . $simple_passage_ligne; //Séparateur d'ouverture
    $email_message .= "Content-Type: text/plain; charset=\"utf-8\"" . $simple_passage_ligne; //Type du contenu
    $email_message .= "Content-Transfer-Encoding: 8bit" . $simple_passage_ligne; //Encodage
    $email_message .= $simple_passage_ligne .clean_string($message_txt). $simple_passage_ligne; //Contenu du message



    if($nom_fichier != ".htaccess"){ //Vérifie que ce n'est pas un .htaccess
        if($type_fichier == "image/jpeg"
            || $type_fichier == "image/pjpeg"
            || $type_fichier == "application/pdf"){ //Soit un jpeg soit un pdf

            if ($taille_fichier <= 2097152) { //Taille supérieure à Mo (en octets)
                $tabRemplacement = array("é"=>"e", "è"=>"e", "à"=>"a"); //Remplacement des caractères spéciaux

                $handle = fopen($source, 'r'); //Ouverture du fichier
                $content = fread($handle, $taille_fichier); //Lecture du fichier
                $encoded_content = chunk_split(base64_encode($content)); //Encodage
                $f = fclose($handle); //Fermeture du fichier

                $email_message .= $simple_passage_ligne . "--" . $boundary . $simple_passage_ligne; //Deuxième séparateur d'ouverture
                $email_message .= 'Content-type:'.$type_fichier.';name="'.$nom_fichier.'"'."n"; //Type de contenu (application/pdf ou image/jpeg)
                $email_message .='Content-Disposition: attachment; filename="'.$nom_fichier.'"'."n"; //Précision de pièce jointe
                $email_message .= 'Content-transfer-encoding:base64'."n"; //Encodage
                $email_message .= "n"; //Ligne blanche. IMPORTANT !
                $email_message .= $encoded_content."n"; //Pièce jointe

            }else{
                //Message d'erreur
                $email_message .= $simple_passage_ligne ."L'utilisateur a tenté de vous envoyer une pièce jointe mais celle ci était superieure à 2Mo.". $simple_passage_ligne;
            }
        }else{
            //Message d'erreur
            $email_message .= $simple_passage_ligne ."L'utilisateur a tenté de vous envoyer une pièce jointe mais elle n'était pas au bon format.". $simple_passage_ligne;
        }
    }else{
        //Message d'erreur
        $email_message .= $simple_passage_ligne ."L'utilisateur a tenté de vous envoyer une pièce jointe .htaccess.". $simple_passage_ligne;
    }
    $email_message .= $simple_passage_ligne . "--" . $boundary . "--" . $simple_passage_ligne; //Séparateur de fermeture



//    $email_body = $message_txt . $simple_passage_ligne;

    mail($mail, $subject, $email_message, $header);
    return true;
}