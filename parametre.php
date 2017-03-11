<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Paramètres</title>
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
			<a href="parametre/exercice1.php?nom=Nemare&prenom=Jean">Résultat</a>
		</article>
		<article>
			<h2>Exercice 2</h2>
			<a href="parametre/exercice2.php?nom=Nemare&prenom=Jean">Résultat</a>
		</article>
		<article>
			<h2>Exercice 3</h2>
			<a href="parametre/exercice3.php?dateDebut=2/05/2016&dateFin=27/11/2016">Résultat</a>
		</article>
		<article>
			<h2>Exercice 4</h2>
			<a href="parametre/exercice4.php?langage=PHP&serveur=LAMP">Résultat</a>
		</article>
		<article>
			<h2>Exercice 5</h2>
			<a href="parametre/exercice5.php?semaine=12">Résultat</a>
		</article>
		<article>
			<h2>Exercice 6</h2>
			<a href="parametre/exercice6.php?batiment=12&salle=101">1.Résultat</a>
			<a href="parametre/exercice6.php?batiment=<script>alert(‘lol’)</script>&salle=101">2.Résultat</a>
		</article>
	</section>
</body>
</html>


