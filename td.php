<?php

	if (isset($_GET['month'],$_GET['year'])) {
		$mois=(int) $_GET['month'];
		$annee=(int) $_GET['year'];
	}else{
		$mois=date('m');
		$annee=date('Y');
	}

	$calendrier= new DateTime($annee.'-'.$mois.'-1');
	$nombreDeJours= cal_days_in_month(CAL_GREGORIAN, $mois, $annee);

	switch($calendrier->format("l")){
		case 'Monday':
			$index=0;
			break;
		case 'Tuesday':
			$index=1;
			break;
		case 'Wednesday':
			$index=2;
			break;
		case 'Thursday':
			$index=3;
			break;
		case 'Friday':
			$index=4;
			break;
		case 'Saturday':
			$index=5;
			break;
		case 'Sunday':
			$index=6;
			break;
	}

	$numerosDuMois = [];
	for ($i=0; $i < $index ; $i++) { //espace vide
		array_push($numerosDuMois,' ');
	}
	for ($numeroJour=1; $numeroJour <=$nombreDeJours ; $numeroJour++) { //numéro jour
		array_push($numerosDuMois,$numeroJour);
	}
	for ($i=0; $i < 6-$index+7 ; $i++) { //Pour rajouter les deux cases manquantes du calendrier
		array_push($numerosDuMois,' ');
	}

	$numTour=0;

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Super globales</title>
</head>
<body>
	<nav>
		<ul id="nav">
			<li><a href="variable.php"><img src="img/variable.svg" id="img1" /><p>Variables</p></a></li>
			<li><a href="condition.php"><img src="img/condition.svg" id="img2" /><p>Conditions</p></a></li>
			<li><a href="boucle.php"><img src="img/boucle.svg" id="img3" /><p>Boucles</p></a></li>
			<li><a href="fonction.php"><img src="img/fonction.svg" id="img4" /><p>Fonctions</p></a></li>
			<li><a href="tableau.php"><img src="img/tableau.svg" id="img5" /><p>Tableaux</p></a></li>
			<li><a href="parametre.php"><img src="img/parametre.svg" id="img6" /><p>Paramètres</p></a></li>
			<li><a href="formulaire.php"><img src="img/formulaire.svg" id="img7" /><p>Formulaires</p></a></li>
			<li><a href="superglobale.php"><img src="img/superglobale.svg" id="img8" /><p>Superglobales</p></a></li>
			<li><a href="date.php"><img src="img/date.svg" id="img9" /><p>Dates</p></a></li>
			<li><a href="td.php"><img src="img/td.svg" id="img10" /></li></a>
		</ul>
	</nav>
	<section>
		<article>
			<h2>Veuillez choisir un mois et une année :</h2>
			<form method="get" action="td.php">
				<label for="mois">Mois</label>
				<SELECT name="month" id="mois">
					<option value="1">Janvier</option>
					<option value="2">Février</option>
					<option value="3">Mars</option>
					<option value="4">Avril</option>
					<option value="5">Mai</option>
					<option value="6">Juin</option>
					<option value="7">Juillet</option>
					<option value="8">Août</option>
					<option value="9">Septembre</option>
					<option value="10">Octobre</option>
					<option value="11">Novembre</option>
					<option value="12">Décembre</option>
				</SELECT>
				<label for="annee">Année</label>
				<SELECT name="year" id="annee">
				<?php 
					//Liste année
					for ($i=2000; $i <= 2100 ; $i++) { 
						echo '<option value="'.$i.'">'.$i.'</option>';
					}
				?>
				</SELECT>
				<button type="submit">Envoi</button>
			</form>
		
			<table>
				<tr>
					<td colspan="7"><?= $calendrier->format('M-Y')?></td>
				</tr>
				<tr>
					<td>Lu</td>
					<td>Ma</td>
					<td>Me</td>
					<td>Je</td>
					<td>Ve</td>
					<td>Sa</td>
					<td>Di</td>
				</tr>
			<?php
				//Affichage calendrier
				for ($semaine=0; $semaine <=5 ; $semaine++) { 
					echo "<tr>";
					for ($jour=0; $jour <=6 ; $jour++) { 
						echo "<td>".$numerosDuMois[$numTour]."</td>";
						$numTour++;
					}
					echo "</tr>";
				}
			?>
			</table>
		</article>
	</section>
</body>
</html>