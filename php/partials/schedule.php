<?php
$numMonth = date("n");

switch ($numMonth) {
	case 1 :
		$month = "Janvier";
		$dateTime = "à partir du samedi 16, les week-end de 10h00 à 18h00";
		break;
	case 2:
		$month = "Février";
		$dateTime = "du mercredi au vendredi, de 14h00 à 17h30 et les week-ends de 10h00 à 17h30.
		Les vacances scolaires, nous sommes ouverts tous les jours de 10h00 à 17h30.";
		break;
	case 3 :
		$month = "Mars";
		$dateTime = "du mercredi au vendredi, de 14h00 à 18h30 et les week-ends de 10h00 à 18h30.";
		break;
	case 4:
		$month = "Avril";
		$dateTime = "du mercredi au dimanche, de 10h00 à 18h30, ainsi que tous les jours des vacances scolaires.";
		break;
	case 5:
		$month = "Mai";
		$dateTime = "du mercredi au dimanche, de 10h00 à 18h30, du 01 au 16 Mai.
		Ainsi que du Mercredi au Dimanche et jour fériés de 10h00 à 20H00, du 19 au 30 Mai.";
		break;
	case 6:
		$month = "Juin";
		$dateTime = "du mercredi au dimanche, de 10h00 à 20h00.";
		break;
	case 7:
		$month = "Juillet";
		$dateTime = "tous les jours de 10h00 à 23h00 la première semaine de $month. Puis, tous les jours de 10h00 du matin à 01h00 du matin.";
		break;
	case 8:
		$month = "Août";
		$dateTime = "tous les jours de 10h00 du matin à 01h00 du matin.";
		break;
	case 9 :
		$month = "Septembre";
		$dateTime = "du mercredi au vendredi de 14h00 à 19h00. Le week-end de 10h00 à 19h00.";
		break;
	case 10 :
		$month = "Octobre";
		$dateTime = "du mercredi au vendredi de 14h00 à 19h00. Le week-end de 10h00 à 19h00.";
		$dateHolidays = "tous les jours de 10h00 à 19h00";
		break;
	case 11 :
		$month = "Novembre";
		$dateTime = "du mercredi au vendredi de 14h00 à 18h00. Le week-end de 10h00 à 19h00.";
		$dateHolidays = "tous les jours de 10h00 à 19h00.";
		break;
	case 12 :
		$month = "Décembre";
		$dateTime = "du mercredi au dimanche, de 14h00 à 18h00.";
		$dateHolidays = "tous les jours de 14h00 à 18h00.";
		$christmasWarning = "ATTENTION: veuillez-nous appeler pour confirmer les horaires du 24 et du 31 décembre.
		Et nous serons également fermés le 25 et le 31 décembre. Passez de bonnes et heureuses fêtes de fin d'année!";
		break;
}


//================================================================================================
// ICI ON VA CHECKER QUE NOUS AVONS BIEN LES RESSOURCES GRAPHIQUES AVEC LA VARIABLE CHECK
// POUR AFFICHER LES HORAIRES OU UN MESSAGE D'EXCUSE DANS LE CODE
//================================================================================================
//Année en cours
$year = gmdate('Y');

//Message d'excuse
$excuseMe = "Nous sommes désolés, nous sommes encore en cours de réflexion/conception ce qui explique que les horaires
 d'ouverture ne sont pas encore affichés ici mais vous pouvez nous joindre par téléphone ou messenger.";

//fichier que nous souhaitons afficher pour la date en cours
$imgOfTheMonthOfTheActualYear = "https://lockarting.fr/assets/img/schedule/mensuel$year/$month.png";

//Ouvrir le fichier
$check = @fopen($imgOfTheMonthOfTheActualYear,'r');

//Verification que le fichier existe
if (!$check) {

 echo $excuseMe;

} else { ?>

<div class="modal-body">
	<h2>Horaires <?= $month." ".$year ?></h2>
	<p class="item-intro text-muted">Est-ce que votre circuit préféré est ouvert?</p>

	<strong style="color: darkred;">Attention : les heures annoncées peuvent changer suivant les annonces du
	gouvernement. Si vous avez un doute, n'hésitez pas à nous appeler ou à nous écrire sur Messenger.
	</strong>

	<?php if (isset($dateHolidays)) : ?>
        <h3>Horaires HORS Vacances Scolaires</h3>
        <img class="img-responsive img-centered" style="width: 20%;" src="/assets/img/ecole1.jpg"
             alt="hors vacances scolaires">
        <p>En <?=$month?>, le circuit est ouvert <?=$dateTime?></p>

        <br>

        <h3>Horaires Vacances Scolaires et Jours Fériés</h3>
        <img class="img-responsive img-centered" style="width: 20%;" src="/assets/img/vacances1.jpg"
             alt="vacances scolaires">
        <p>Pendant toute la durée des vacances: le circuit est ouvert <?=$dateHolidays?></p>
		<?php if (isset($christmasWarning)) : ?><strong class="bg-danger"><?=$christmasWarning?></strong><?php endif; ?>

	<?php else : ?>
        <img class="img-responsive img-centered" style="width: 20%;" src="/assets/img/horloge.jpg"
             alt="horloge">
        <p>En <?=$month?>, le circuit est ouvert <?=$dateTime?></p>
	<?php endif; ?>

	<br>

	<h3>En Image Ca Donne Ca</h3>
	<img class="img-responsive img-centered"
	     src="<?=$imgOfTheMonthOfTheActualYear?>"
	     alt="horaires d'ouverture du circuit pour le mois de <?=$month?>"
	>
	<p>Pour les plus visuels d'entre nous! &#x1F609;
	    <a href="<?=$imgOfTheMonthOfTheActualYear?>" download="<?=$month?>Lockarting">
			<strong style="color: darkred;">Télécharger l'image</strong>
		</a>
	</p>

	<br>
	<br>

	<p>
		<strong>En toute saison, Nous sommes fermés en cas de météo ne permettant pas la pratique sur circuit.</strong>
	</p>
	<p>
		<strong>Vous êtes perdu? Il pleut des cordes? Vous voulez être certain de ne pas vous déplacer pour rien? Vous avez raison!</strong>
	</p>
	<p style="font-size: large;">Appelez-nous!
		<i class="fa fa-phone">
			<a style="color: darkred;" href="tel:0467170342" title="0467170342" itemprop="telephone">04.67.17.03.42</a>
		</i>
	</p>

	<button type="button" class="btn btn-primary" data-dismiss="modal">Retour</button>
</div>

<?php } ?>

