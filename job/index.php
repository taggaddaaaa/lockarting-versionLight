<?php
include "../php/iWantAJob.php";
if (manageJobInscription()) {
    // To empty the form ...
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

    <title>Loc'karting - On recrute. Rejoins-nous!</title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.lockarting.fr/job" />

    <!-- Search Engine -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="image" content="https://lockarting.fr/assets/img/dlApp.png">
    <meta name="keywords" content="karting, circuit de karting, piste de karting, karting à Montpellier, karting Pérols, kart 34, karting 34,
     enterrement de vie de garçon, enterrement de vie de fille, incentive, chrono, sensation forte">
    <meta name="description" content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Loc'karting - On recrute. Rejoins-nous!">
    <meta itemprop="description"
          content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée."
    >
    <meta itemprop="image" content="https://lockarting.fr/assets/img/dlApp.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@lockarting">
    <meta name="twitter:title" content="Loc'karting - On recrute. Rejoins-nous!">
    <meta name="twitter:description"
          content="À partir de 7 ans, en famille, ou entre amis, Venez défier le chrono sur le circuit mythique de Pérols.
	      Téléchargez l'application mobile pour garder l'historique de vos chronos.
	      Partagez-les avec vos amis et gagnez des Kartcoins à chaque course terminée."
    >
    <meta name="twitter:creator" content="@taggaddaaaa">
    <meta name="twitter:image:src" content="https://lockarting.fr/assets/img/dlApp.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Loc'karting - On recrute. Rejoins-nous!"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.lockarting.fr/job"/>
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
                    Loc'karting recrute
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto" style="background-color: rgba(0,0,0,.5)">
                <h3>Dans le cadre de notre développement, nous recherchons toute l'année des personnes motivées et accueillantes,
                    voulant offrir la meilleure expérience possible à nos clients.
                </h3>
                <h5>Notre activité se développe et nous testons de nouvelles prestations. Nous avons inventé le concept
                    Fondue2Kart qui nous permet d'offrir une nouvelle expérience traiteur à nos clients professionnels.
                    Nous avons aussi ponctuellement besoin de renfort pour les vacances scolaires et les week-ends pour
                    organiser nos différents évènements.
                    Il n'est pas indispensable de venir du milieu du karting mais une expérience dans le service,
                    l'animation ou la restauration est un plus. Une formation karting sera dispensée.
                </h5>
            </div>
        </div>
        <!--        TODO: Mettre les deux Rows suivantes en ligne sur desktop et a la suite sur mobile-->
        <div class="row" style="padding-top: 1rem">
            <div class="col-md-10 ml-auto mr-auto text-center">
                <img class="center" style="padding-bottom: 1rem"
                     src="/assets/img/jobQuality.png"
                     alt="liste des qualités demandées pour le job"
                >
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 ml-auto mr-auto">
                <div class="card card-login">
                    <form id="jobForm"
                          class="jobForm"
                          method="POST"
                          accept-charset="UTF-8"
                    >
                        <div class="card-header card-header-warning text-center">
                            <h4 class="card-title"><b>REMPLI LE FORMULAIRE POUR ÊTRE RECONTACTÉ(E) :</b></h4>
                        </div>
                        <div class="card-body">
<!--                            prenom-->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">face</i>
                                </span>
                                </div>
                                <input id="fname" name="fname"
                                       type="text" class="form-control" placeholder="Prénom..." value="<?php if (isset($_POST)) echo $_POST['fname']; ?>">
                            </div>

<!--                            nom-->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">face</i>
                                </span>
                                </div>
                                <input id="lname" name="lname"
                                       type="text" class="form-control" placeholder="Nom..." value="<?php if (isset($_POST)) echo $_POST['lname']; ?>">
                            </div>

<!--                            mail-->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">mail</i>
                                </span>
                                </div>
                                <input id="email" name="email"
                                       type="email" class="form-control" placeholder="Email..." value="<?php if (isset($_POST)) echo $_POST['email']; ?>">
                            </div>

<!--                            telephone-->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">phone</i>
                                </span>
                                </div>
                                <input id="phone" name="phone"
                                       type="tel" class="form-control" placeholder="Téléphone..." value="<?php if (isset($_POST)) echo $_POST['phone']; ?>">
                            </div>

<!--                            vehicule-->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">directions_car</i>
                                </span>
                                </div>
                                <div class="togglebutton">
                                    <label>
                                        <input id="car" name="car"
                                               type="checkbox" <?php if (isset($_POST) && $_POST['car']) echo 'checked'; ?> >
                                        <span class="toggle"></span>
                                        Je suis véhiculé
                                    </label>
                                </div>
                            </div>

<!--                            Date de Naissance-->
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">child_friendly</i>
                                </span>
                                </div>
                                <label>
                                    <input id="birth" name="birth" required
                                           type="date" class="form-control" placeholder="Date de Naissance..." value="<?php if (isset($_POST)) echo $_POST['birth']; ?>">
                                    Date de naissance
                                </label>
                            </div>

<!--                            CNI-->
<!--                            <div class="input-group">-->
<!--                                <div class="input-group-prepend">-->
<!--                                    <span class="input-group-text">-->
<!--                                      <i class="material-icons">wallpaper</i>-->
<!--                                    </span>-->
<!--                                </div>-->
<!--                                <label for="identity">-->
<!--                                    <input id="identity" name="identity" required-->
<!--                                           type="file" class="form-control">-->
<!--                                    Passeport ou CNI...-->
<!--                                </label>-->
<!--                            </div>-->

<!--                            SUBMIT-->
                            <div class="input-group">
                                <div id="success-mail"></div>
                                <input type="submit" name="submitForm" class="btn btn-success btn-wd btn-lg" value="Je Postule !" />
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
