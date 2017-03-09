<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Super globales</title>
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
	<section>
		<article>
		<h1>Exercice 1</h1>
		<?php
			echo date('d/m/Y');
		?>
		</article>
		<article>
		<h1>Exercice 2</h1>
		<?php
			echo date('d-m-y');
		?>
		</article>
		<article>
		<h1>Exercice 3</h1>
		<?php
			echo strftime('%A %e %B %Y'); 
		?>
		</article>
		<article>
		<h1>Exercice 4</h1>
		<?php
			echo time().'<br>';
			echo mktime(15, 34, 12, 03, 02, 2016);
		?>
		</article>
		<article>
		<h1>Exercice 5</h1>
		<?php
			echo floor((time()-mktime(0,0,0,05,16,2016))/86400);
		?>
		</article>
		<article>
		<h1>Exercice 6</h1>
		<?php
			echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);
		?>
		</article>
		<article>
		<h1>Exercice 7</h1>
		<?php
			$date = '03/09/2017';
			echo date('d/m/Y', strtotime($date.' + 20 DAY'));
		?>
		</article>
		<article>
		<h1>Exercice 8</h1>
		<?php
			$date = '03/09/2017';
			echo date('d/m/Y', strtotime($date.' - 22 DAY'));
		?>
		</article>
	</section>
</body>
</html>

