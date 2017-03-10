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
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Superglobales</title>
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
				echo "Votre user agent est: ".$_SERVER['HTTP_USER_AGENT'].", votre adresse IP est: ".$_SERVER['REMOTE_ADDR'].", et le nom de votre serveur est: ".$_SERVER['SERVER_NAME'];
			?>
		</article>
		<article>
		<h2>Exercice 2</h2>
			<a href="superglobale2.php">Affichage</a>
		</article>
		<article>
			<h2>Exercice 3/4/5</h2>
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