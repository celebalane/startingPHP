
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Variables</title>
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
				<h2>Exercice 1</h2>
				<?php
					//Exo 1
					$name = 'Emilie<br>';
					echo $name;
				?>
			</article>
			<article>
				<h2>Exercice 2</h2>
				<?php
					//Exo 2
					$nom = 'Leterme';
					$prenom = 'Mango';
            		$age = 1;
            		echo 'Nom: '.$nom.', Prénom: '.$prenom.', Age: '.$age.'<br>';
            	?>
            </article>
            <article>
            	<h2>Exercice 3</h2>
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
            	<h2>Exercice 4</h2>
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
            	<h2>Exercice 5</h2>
            	<?php
            		//Exo 5
					$nombre = (int)NULL;
					echo $nombre.'<br>';
					$nombre = 2;
					echo 'Nombre: '.$nombre.'<br>';
				?>
			</article>
			<article>
				<h2>Exercice 6</h2>
				<?php
					//Exo 6
					$nom = 'Mango';
					echo 'Bonjour '.$nom.', comment vas-tu?';
				?>
			</article>
			<article>
				<h2>Exercice 7</h2>
				<?php
					//Exo 7
					$nom = 'Leterme';
					$prenom= 'Emilie';
					$age = 30;

					echo 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.<br>';
				?>
			</article>
			<article>
				<h2>Exercice 8</h2>
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