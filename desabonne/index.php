<?php
include "../php/newsletterManager.php";

$view = '';
$newsletterManagerRet = manageNewsletterDesabonne();
if ($newsletterManagerRet === 1) {
    $view = 'success';
} else if ($newsletterManagerRet === -1) {
    $view = 'fail';
}

if (!validNewsletterDesabonneLink()) {
    header('Location: https://www.lockarting.fr');
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

    <title>Loc'karting - Newsletter</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.lockarting.fr/desabonne" />

    <!-- Search Engine -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="image" content="https://lockarting.fr/assets/img/dlApp.png">
    <meta name="keywords" content="karting, circuit de karting, piste de karting, karting à Montpellier, karting Pérols, kart 34, karting 34,
     enterrement de vie de garçon, enterrement de vie de fille, incentive, chrono, sensation forte">
    <meta name="description" content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Loc'karting - Newsletter">
    <meta itemprop="description"
          content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée."
    >
    <meta itemprop="image" content="https://lockarting.fr/assets/img/dlApp.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@lockarting">
    <meta name="twitter:title" content="Loc'karting - Newsletter">
    <meta name="twitter:description"
          content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée."
    >
    <meta name="twitter:creator" content="@taggaddaaaa">
    <meta name="twitter:image:src" content="https://lockarting.fr/assets/img/dlApp.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Loc'karting - Newsletter"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lockarting.fr/desabonne"/>
    <meta property="og:image:width" content="203">
    <meta property="og:image:height" content="203">
    <meta property="og:image" content="https://www.lockarting.fr/assets/img/dlApp.png">
    <meta property="og:description"
          content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée."
    />
    <meta property="og:site_name" content="Loc'karting"/>
    <meta property="og:locale" content="fr_FR"/>
    <meta property="fb:admins" content="223079824501362"/>
    <meta property="fb:app_id" content="188494268262133"/>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/material-dashboard.min.css" />
    <link rel="stylesheet" href="../assets/css/application.css" />

    <!--logo dans la barre de navigation- optimisé par le site https://realfavicongenerator.net -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png?v=GvmAvN3YRN">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png?v=GvmAvN3YRN">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png?v=GvmAvN3YRN">
    <link rel="manifest" href="/site.webmanifest?v=GvmAvN3YRN">
    <link rel="mask-icon" href="../assets/img/favicons/safari-pinned-tab.svg?v=GvmAvN3YRN" color="#ffc40d">
    <link rel="shortcut icon" href="../assets/img/favicons/favicon.ico?v=GvmAvN3YRN">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="off-canvas-sidebar">

<!--NAV-->
<?php include "../php/partials/navbar.php" ?>

<!--HEADER-->
<div style="background-image: url('../assets/img/piste3.jpg');" class="page-header header-filter" data-parallax="true">
    <div class="container" style="padding-top: 6em;">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto text-center">
                <h1 class="title title-app uppercase" style="color: #FFCD38">
                    Newsletter Loc'karting
                </h1>
            </div>
        </div>
        <div class="row" style="display: <?php echo ($view === 'success' ? 'none' : 'block') ?>;">
            <div class="col-md-12 ml-auto mr-auto py-2" style="text-align: center; background-color: rgba(0,0,0,.5)">
                <h3>Notre newsletter se limite à un récupitulatif mensuel de ton classement</h3>
                <h5>Si toutefois tu ne souhaitais plus la recevoir, merci de saisir ton adresse e-mail ci-dessous puis de valider le formulaire</h5>
            </div>
        </div>
        <!--        TODO: Mettre les deux Rows suivantes en ligne sur desktop et a la suite sur mobile-->

        <div class="row" style="display: <?php echo ($view === 'success' ? 'block' : 'none') ?>;">
            <div class="col-md-12 ml-auto mr-auto" style="text-align: center; background-color: rgba(0,0,0,.5)">
                <h3>
                    Ta désinscription de la newsletter a bien été prise en compte.
                    <br />Nous espérons te revoir bientôt sur le circuit
                </h3>
            </div>
        </div>


        <div class="row" style="display: <?php echo ($view === 'success' ? 'none' : 'block') ?>;">
            <div class="col-lg-6 col-md-6 ml-auto mr-auto">

                <div class="card card-login">
                    <form id="desabonneForm" class="desabonneForm" method="POST" accept-charset="UTF-8">

                        <input type=hidden name="id" value="<?php if (isset($_GET)) echo $_GET['id']; ?>" />
                        <input type=hidden name="sign" value="<?php if (isset($_GET)) echo $_GET['sign']; ?>" />

                        <div class="card-header card-header-warning text-center">
                            <h4 class="card-title"><b>SAISIS TON EMAIL POUR VALIDER TA DESINSCRIPTION :</b></h4>
                        </div>

                        <div class="card-body">

                            <!-- Mail -->
                            <div class="input-group pt-3 pb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">mail</i>
                                    </span>
                                </div>
                                <input id="email" name="email"
                                       type="email" class="form-control" placeholder="Email..." />
                            </div>

                            <div class="input-group" style="text-align: center; color: red; display: <?php echo ($view === 'fail' ? 'block' : 'none') ?>">
                                Une erreur est survenue, merci de réessayer
                            </div>

                            <!-- SUBMIT -->
                            <div class="input-group pt-4">
                                <div id="success-mail"></div>
                                <input type="submit" name="submitForm" class="btn btn-success btn-wd btn-lg" value="Se désinscrire" />
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "../php/partials/messenger.php" ?>
<?php include "../php/partials/footer.php" ?>
<?php include "../php/partials/scripts.php" ?>
</body>
</html>
