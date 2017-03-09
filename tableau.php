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
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Tableaux</title>
</head>
<body>
	<nav>
		<a href="index.php"><h1>Les exercices</h1></a>
		<a href="variable.php">Exercice 1</a>
		<a href="condition.php">Exercice 2</a>
		<a href="boucle.php">Exercice 3</a>
		<a href="fonction.php">Exercice 4</a>
		<a href="tableau.php">Exercice 5</a>
		<a href="parametre.php">Exercice 6</a>
		<a href="formulaire.php">Exercice 7</a>
		<a href="superglobale.php">Exercice 8</a>
		<a href="date.php">Exercice 9</a>
	</nav>
	<article>
		<h1>Exercice 1</h1>
		<?php
			var_dump($mois);
		?>
	</article>
	<article>
		<h1>Exercice 2</h1>
		<?php
			echo $mois[2];
		?>
	</article>
	<article>
		<h1>Exercice 3</h1>
		<?php
			echo $mois[5];
		?>
	</article>
	<article>
		<h1>Exercice 4</h1>
		<?php
			echo $mois[3];
		?>
	</article>
	<article>
		<h1>Exercice 5</h1>
		<?php
			var_dump($departement);
		?>
	</article>
	<article>
		<h1>Exercice 6</h1>
		<?php
			echo $departement[59];
		?>
	</article>
	<article>
		<h1>Exercice 7</h1>
		<?php
			var_dump($departement);
		?>
	</article>
	<article>
		<h1>Exercice 8</h1>
		<?php
			foreach ($mois as $case) {
				echo $case.' ';
			}
		?>
	</article>
	<article>
		<h1>Exercice 9</h1>
		<?php
			print_r($departement);
		?>
	</article>
	<article>
		<h1>Exercice 10</h1>
		<?php
			foreach ($departement as $numero => $case) {
				echo "Le département ".$case." a le numéro : ".$numero.'<br>';
			}
		?>
	</article>
</body>
</html>