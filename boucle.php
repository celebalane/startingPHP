<?php

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Boucle</title>
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
				$uneVariable = 0;

 				while ($uneVariable <= 10) {
 				
 					echo $uneVariable.' ';
 					$uneVariable ++;
 				}
			?>
		</article>
		<article>
			<h2>Exercice 2</h2>
			<?php
				$premier=0;
				$deuxieme=49;

				while ( $premier <= 20) {
					echo $premier*$deuxieme.' ';
					$premier ++;
				}
			?>
		</article>
		<article>
			<h2>Exercice 3</h2>
			<?php
			 	$nombre= 100;
			 	$nombre2= 39;

			 	while ( $nombre >= 10) {
			 		echo $nombre*$nombre2.' ';
			 		$nombre-=1;
			 	}
			 ?>
		</article>
		<article>
			<h2>Exercice 4</h2>
			<?php
				$truc=1;

				while ($truc <= 10) {
					echo $truc.' ';
					$truc+=$truc*0.5;
				}

			?>
		</article>
		<article>
			<h2>Exercice 5</h2>
			<?php
				for ($i=1; $i <= 15; $i++) { 
					echo 'On y arrive presque ';
				}
			?>
		</article>
		<article>
			<h2>Exercice 6</h2>
			<?php
				for ($i=20; $i >=0 ; $i--) { 
					echo "C'est presque bon ";
				}
			?>
		</article>
		<article>
			<h2>Exercice 7</h2>
			<?php
				for ($i=1; $i <=100 ; $i+=15) { 
					echo "On tient le bon bout! ";
				}
			?>
		</article>
		<article>
			<h2>Exercice 8</h2>
			<?php
				for ($i=200; $i >=0 ; $i-=12) { 
					echo 'Enfin!!!! ';
				}
			?> 
		</article>
	</section>
</body>
</html>