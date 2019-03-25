<?php
switch($_SERVER["REDIRECT_STATUS"]){
	case 400:
		$errorCode = "400";
		$title = "Bad Request";
		$description = "La demande ne peut pas être traitée en raison d'une syntaxe incorrecte";
		break;
	case 401:
		$errorCode = "401";
		$title = "Unauthorized";
		$description = "La demande d'authentification a échoué.";
		break;
	case 403:
		$errorCode = "403";
		$title = "Forbidden";
		$description = "Le serveur refuse de répondre à la demande.";
		break;
	case 404:
		$errorCode = "404";
		$title = "Not Found";
		$description = "La ressource demandée est introuvable.";
		break;
	case 500:
		$errorCode = "500";
		$title = "Internal Server Error";
		$description = "Il y a une erreur serveur inconnue.";
		break;
	case 502:
		$errorCode = "502";
		$title = "Bad Gateway";
		$description = "Le serveur agit en tant que proxy et a reçu une requête incorrecte.";
		break;
	case 504:
		$errorCode = "504";
		$title = "Gateway Timeout";
		$description = "Le serveur agit en tant que proxy et la demande a expiré.";
		break;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' />
    <meta name="publisher" content="Sabine Caizergues"/>
    <meta name="author" content="Sabine Caizergues"/>

    <title>Loc'karting - Page d'erreur</title>

    <!-- Search Engine -->
    <meta name="robots" content="nofollow">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link rel="stylesheet" href="/assets/css/material-dashboard.min.css" />
    <link rel="stylesheet" href="/assets/css/register.css" />

    <!--logo dans la barre de navigation- optimisé par le site https://realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png?v=GvmAvN3YRN">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png?v=GvmAvN3YRN">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png?v=GvmAvN3YRN">
    <link rel="manifest" href="/site.webmanifest?v=GvmAvN3YRN">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg?v=GvmAvN3YRN" color="#ffc40d">
    <link rel="shortcut icon" href="/assets/img/favicons/favicon.ico?v=GvmAvN3YRN">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="off-canvas-sidebar">

<?php include "partials/navbar.php" ?>

<div class="wrapper wrapper-full-page">
	<div class="page-header error-page header-filter" style="background-image: url('/assets/img/clint-mckoy.jpg');">
		<!--   you can change the color of the filter page using: data-color="blue | green | orange | red | purple" -->
		<div class="content-center">
			<div class="row">
				<div class="col-md-12">
					<h1 style="margin-top: 0; margin-bottom: 0;" class="title"><?= $errorCode ?></h1>
					<h3><?= $title ?></h3>
					<h2>Ooooups! 😣 On dirait que vous êtes en panne!</h2>
					<h5><?= $description ?></h5>
				</div>
			</div>
		</div>

        <?php include "partials/footer.php" ?>
    </div>
</div>

<?php include "partials/scripts.php" ?>

</body>

</html>
