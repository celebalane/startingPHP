<?php
	if(isset($_GET['nom']) &&isset($_GET['prenom'])){
		$resultat= htmlspecialchars($_GET['nom'].' '.$_GET['prenom']);
	}else{
		$resultat = 'il y a une erreur';
	}

	if(isset($_POST['nom']) &&isset($_POST['prenom'])){
		$resultat2= htmlspecialchars($_POST['nom'].' '.$_POST['prenom']);
	}else{
		$resultat2 = 'il y a une erreur';
	}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Exercices</title>
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
			<h2>Formulaire 1</h2>
			<?php
				echo $resultat;
			?>
			<a href="formulaire.php"><button type="button">Retour</button></a>
		</article>
		<article>
			<h2>Formulaire 2</h2>
			<?php
				echo $resultat2;
			?>
			<a href="formulaire.php"><button type="button">Retour</button></a>
		</article>
	</section>
</body>
</html>