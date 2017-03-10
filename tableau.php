<?php
//Exo 1
	$mois =array('janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');

//Exo 4
	$mois[3]='julien';

//Exo 5
	$departement = [02=>'Aisne',59=>'Nord',60=>'Oise',80=>'Somme'];

//Exo 7
	$departement[51]='Marne';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Tableaux</title>
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
	<article>
		<h2>Exercice 1</h2>
		<?php
			var_dump($mois);
		?>
	</article>
	<article>
		<h2>Exercice 2</h2>
		<?php
			echo $mois[2];
		?>
	</article>
	<article>
		<h2>Exercice 3</h2>
		<?php
			echo $mois[5];
		?>
	</article>
	<article>
		<h2>Exercice 4</h2>
		<?php
			echo $mois[3];
		?>
	</article>
	<article>
		<h2>Exercice 5</h2>
		<?php
			var_dump($departement);
		?>
	</article>
	<article>
		<h2>Exercice 6</h2>
		<?php
			echo $departement[59];
		?>
	</article>
	<article>
		<h2>Exercice 7</h2>
		<?php
			var_dump($departement);
		?>
	</article>
	<article>
		<h2>Exercice 8</h2>
		<?php
			foreach ($mois as $case) {
				echo $case.' ';
			}
		?>
	</article>
	<article>
		<h2>Exercice 9</h2>
		<?php
			print_r($departement);
		?>
	</article>
	<article>
		<h2>Exercice 10</h2>
		<?php
			foreach ($departement as $numero => $case) {
				echo "Le département ".$case." a le numéro : ".$numero.'<br>';
			}
		?>
	</article>
</body>
</html>