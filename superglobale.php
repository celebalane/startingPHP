<?php
	session_start();

	$_SESSION['prenom']= 'Emilie';
	$_SESSION['nom']= 'Leterme';
	$_SESSION['age']= 30;

if (isset($_POST['id']) && isset($_POST['pwd'])) {
	$pseudo = $_POST['id'];
	$pwd = $_POST['pwd'];
	setcookie("id", $_POST['id'],time()+3600);
	setcookie("pwd", $_POST['pwd'],time()+3600);
	header('Location:superglobale2.php');
}else{
	$pseudo= ' Veuillez entrer un identifiant ';
	$pwd= 'Veuillez entrer un mdp ';
}
?>
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
				echo "Votre user agent est: ".$_SERVER['HTTP_USER_AGENT'].", votre adresse IP est: ".$_SERVER['REMOTE_ADDR'].", et le nom de votre serveur est: ".$_SERVER['SERVER_NAME'];
			?>
		</article>
		<article>
		<h1>Exercice 2</h1>
			<a href="superglobale2.php">Affichage</a>
		</article>
		<article>
			<h1>Exercice 3/4/5</h1>
			<form method="post" action="superglobale.php">
				<label for="id">Identifiant</label>
				<input type="text" name="id" value="<?= $pseudo;?>" placeholder="Ex: Dupond" id="id" />
				<label for="pwd">Login</label>
				<input type="password" name="pwd" placeholder="<?= $pwd;?>" id="pwd" />
				<button type="submit">Envoi</button>
			</form>
		</article>
	</section>
</body>
</html>