<?php
function manageNewsletterDesabonne() {

    if (!isset($_POST['submitForm'])) {
        return 0;
    }

    $id = htmlentities($_POST['id']);
    $sign = htmlentities($_POST['sign']);
    $email = htmlentities($_POST['email']);


    // $url = 'http://192.168.8.11:8000/public/api/newsletter/desabonne'; // DEV
    $url = 'https://app.lockarting.fr/public/api/newsletter/desabonne';

	$data = new stdClass();
	$data->id = $id;
	$data->sign = $sign;
	$data->email = $email;

	// use key 'http' even if you send the request to https://...
	$options = array(
	    'http' => array(
	        'header'  => "Content-type: application/json\r\n",
	        'method'  => 'POST',
	        'content' => json_encode($data)
	    )
	);
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);

	var_dump($result);
	if ($result === false) {
		return -1;
	}
	return 1;
}


function validNewsletterDesabonneLink() {
    $id = htmlentities($_GET['id']);
    $sign = htmlentities($_GET['sign']);
    if (!$id || $id === '' || !$sign || $sign === '')
    	return false;
    return true;
}

?>