<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Exo 2</title>
</head>
<body>
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
		<h2>Modifier l'identifiant</h2>
		<form method="post" action="superglobale2.php">
			<label for="id">Nouvel Identifiant</label>
			<input type="text" name="id" placeholder="Ex: Dupond" id="id" />
			<label for="pwd">Login</label>
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