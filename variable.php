
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Variables</title>
</head>
<body>
	<nav>
		<h1>Les exercices</h1>
		<a href="variable.php">Exercice 1</a>
		<a href="condition.php">Exercice 2</a>
		<a href="boucle.php">Exercice 3</a>
		<a href="fonction.php">Exercice 4</a>
		<a href="tableau.php">Exercice 5</a>
		<a href="parametre.php">Exercice 6</a>
		<a href="formulaire.php">Exercice 7</a>
		<a href="superglobale.php">Exercice 8</a>
	</nav>
		<section>
			<article>
				<h1>Exercice 1</h1>
				<?php
					//Exo 1
					$name = 'Emilie<br>';
					echo $name;
				?>
			</article>
			<article>
				<h1>Exercice 2</h1>
				<?php
					//Exo 2
					$nom = 'Leterme';
					$prenom = 'Mango';
            		$age = 1;
            		echo 'Nom: '.$nom.', Prénom: '.$prenom.', Age: '.$age.'<br>';
            	?>
            </article>
            <article>
            	<h1>Exercice 3</h1>
            	<?php
            		//Exo 3
            		$kilometre = 1;
            		echo 'kilometre: '.$kilometre.'<br>';
            		$kilometre = 3;
            		echo 'kilometre: '.$kilometre.'<br>';
            		$kilometre = 125;
            		echo 'kilometre: '.$kilometre.'<br>';
            	?>
            </article>
            <article>
            	<h1>Exercice 4</h1>
            	<?php
            		//Exo 4
            		$animal='chat';
            		$mois= 4;
            		$poids = 4.5;
            		$male = true;
            		echo 'Animal: '.$animal.', Mois de naissance: '.$mois.', Poids: '.$poids.', Sexe: '.$male.'<br>';
            	?>
            </article>
            <article>
            	<h1>Exercice 5</h1>
            	<?php
            		//Exo 5
					$nombre = (int)NULL;
					echo $nombre.'<br>';
					$nombre = 2;
					echo 'Nombre: '.$nombre.'<br>';
				?>
			</article>
			<article>
				<h1>Exercice 6</h1>
				<?php
					//Exo 6
					$nom = 'Mango';
					echo 'Bonjour '.$nom.', comment vas-tu?';
				?>
			</article>
			<article>
				<h1>Exercice 7</h1>
				<?php
					//Exo 7
					$nom = 'Leterme';
					$prenom= 'Emilie';
					$age = 30;

					echo 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.<br>';
				?>
			</article>
			<article>
				<h1>Exercice 8</h1>
				<?php
					//Exo 8
					$addition = 3+4;
					$multi = 5*20;
					$division = 45/5;
					echo 'Résultats :<br>'.$addition.'<br>'.$multi.'<br>'.$division.'<br>';
				?>
			</article>
		</section>
	</body>
</html>