<?php
//Exo 1
	$mois =array('janvier','fevrier','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
//Exo 2


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
		
		?>
	</article>
	<article>
		<h1>Exercice 4</h1>
		<?php
		
		?>
	</article>
	<article>
		<h1>Exercice 5</h1>
		<?php
		
		?>
	</article>
</body>
</html>