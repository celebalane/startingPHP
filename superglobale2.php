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
</body>
</html>