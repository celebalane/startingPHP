<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Paramètres</title>
</head>
<body>
	<section>
		<article>
			<h1>Exercice 1</h1>
			<a href="parametre/exercice1.php?nom=Nemare&prenom=Jean">Résultat</a>
		</article>
		<article>
			<h1>Exercice 2</h1>
			<a href="parametre/exercice2.php?nom=Nemare&prenom=Jean">Résultat</a>
		</article>
		<article>
			<h1>Exercice 3</h1>
			<a href="parametre/exercice3.php?dateDebut=2/05/2016&dateFin=27/11/2016">Résultat</a>
		</article>
		<article>
			<h1>Exercice 4</h1>
			<a href="parametre/exercice4.php?langage=PHP&serveur=LAMP">Résultat</a>
		</article>
		<article>
			<h1>Exercice 5</h1>
			<a href="parametre/exercice5.php?semaine=12">Résultat</a>
		</article>
		<article>
			<h1>Exercice 6</h1>
			<a href="parametre/exercice6.php?batiment=12&salle=101">Résultat</a>
			<a href="parametre/exercice6.php?batiment=<script>alert(‘lol’)</script>&salle=101">Résultat</a>
		</article>
	</section>
</body>
</html>


