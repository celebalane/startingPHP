<?php
//Exo 1
	$mois =array('janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');

//Exo 3
	$mois[3]='julien';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Tableaux</title>
</head>
<body>
	<article>
		<h1>Exercice 1</h1>
		<?php
			foreach ($mois as  $case) {
			 	echo $case.' ';
			 } 
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
		
		?>
	</article>
	<article>
		<h1>Exercice 6</h1>
		<?php
		
		?>
	</article>
	<article>
		<h1>Exercice 7</h1>
		<?php
		
		?>
	</article>
	<article>
		<h1>Exercice 8</h1>
		<?php
		
		?>
	</article>
	<article>
		<h1>Exercice 9</h1>
		<?php
		
		?>
	</article>
	<article>
		<h1>Exercice 10</h1>
		<?php
		
		?>
	</article>
</body>
</html>