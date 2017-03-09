<?php

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Boucle</title>
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
				$uneVariable = 0;

 				while ($uneVariable <= 10) {
 				
 					echo $uneVariable.' ';
 					$uneVariable ++;
 				}
			?>
		</article>
		<article>
			<h1>Exercice 2</h1>
			<?php
				$premier=0;
				$deuxieme=49;

				while ( $premier < 20) {
					echo $premier*$deuxieme.' ';
					$premier ++;
				}
			?>
		</article>
		<article>
			<h1>Exercice 3</h1>
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
			<h1>Exercice 4</h1>
			<?php
				$truc=1;

				while ($truc < 10) {
					echo $truc.' ';
					$truc+=$truc*0.5;
				}

			?>
		</article>
		<article>
			<h1>Exercice 5</h1>
			<?php
				for ($i=1; $i <= 15; $i++) { 
					echo 'On y arrive presque ';
				}
			?>
		</article>
		<article>
			<h1>Exercice 6</h1>
			<?php
				for ($i=20; $i >=0 ; $i--) { 
					echo "C'est presque bon ";
				}
			?>
		</article>
		<article>
			<h1>Exercice 7</h1>
			<?php
				for ($i=1; $i <=100 ; $i+=15) { 
					echo "On tient le bon bout! ";
				}
			?>
		</article>
		<article>
			<h1>Exercice 8</h1>
			<?php
				for ($i=200; $i >=0 ; $i-=12) { 
					echo 'Enfin!!!! ';
				}
			?> 
		</article>
	</section>
</body>
</html>