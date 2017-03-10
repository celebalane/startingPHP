<?php
	session_start();
	if(isset($_POST['pwd'])){
		$_COOKIE['pwd']=$_POST['pwd'];
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Super globales 2</title>
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
	<article>
		<?php 
			echo "Bonjour ".$_SESSION['prenom']." ".$_SESSION['nom'].", tu as ".$_SESSION['age']." ans";
		?>
		<a href="superglobale.php"><button type="button">Retour</button></a>
	</article>
	<article>
	<?php
	
		echo "Ton identifiant est ".$_COOKIE['id'].'<br>';
		echo "Ton mot de passe est ".$_COOKIE['pwd'];
	?>
	</article>
	<article>

	<?php
		if(isset($_COOKIE['id'])&&isset($_COOKIE['pwd'])){	
	?>
		<h2>Modifier le mot de passe</h2>
		<form method="post" action="superglobale2.php">
			<label for="pwd">Nouveau mot de passe</label>
			<input type="password" name="pwd" placeholder="Ex: Jacques" id="pwd" />
			<button type="submit">Envoi</button>
		</form>
	<?php
	}else{
		echo 'erreur';
	}
	?>
	</article>
</body>
</html>