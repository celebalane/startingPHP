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
		<h2>Exercice 1</h2>
		<?php
			echo date('d/m/Y');
		?>
		</article>
		<article>
		<h2>Exercice 2</h2>
		<?php
			echo date('d-m-y');
		?>
		</article>
		<article>
		<h2>Exercice 3</h2>
		<?php
			echo strftime('%A %e %B %Y'); 
		?>
		</article>
		<article>
		<h2>Exercice 4</h2>
		<?php
			echo time().'<br>';
			echo mktime(15, 34, 12, 03, 02, 2016);
		?>
		</article>
		<article>
		<h2>Exercice 5</h2>
		<?php
			echo floor((time()-mktime(0,0,0,05,16,2016))/86400);
		?>
		</article>
		<article>
		<h2>Exercice 6</h2>
		<?php
			echo cal_days_in_month(CAL_GREGORIAN, 2, 2016);
		?>
		</article>
		<article>
		<h2>Exercice 7</h2>
		<?php
			$date = '03/09/2017';
			echo date('d/m/Y', strtotime($date.' + 20 DAY'));
		?>
		</article>
		<article>
		<h2>Exercice 8</h2>
		<?php
			$date = '03/09/2017';
			echo date('d/m/Y', strtotime($date.' - 22 DAY'));
		?>
		</article>
	</section>
</body>
</html>

