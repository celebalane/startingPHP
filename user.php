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
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Exercices</title>
</head>
<body>
	<section>
		<article>
			<h1>Exercice 3</h1>
			<?php
				echo $resultat;
			?>
			<a href="formulaire.php"><button type="button">Retour</button></a>
		</article>
		<article>
			<h1>Exercice 4</h1>
			<?php
				echo $resultat2;
			?>
			<a href="formulaire.php"><button type="button">Retour</button></a>
		</article>
		<article>
			<h1>Exercice 5</h1>
			<a href="formulaire.php"><button type="button">Retour</button></a>
		</article>
		<article>
			<h1>Exercice 4</h1>
			
		</article>
		<article>
			<h1>Exercice 5</h1>
			
		</article>
		<article>
			<h1>Exercice 6</h1>
			
		</article>
	</section>
</body>
</html>