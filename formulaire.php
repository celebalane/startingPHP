<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>formulaire</title>
</head>
<body>
	<section>
		<article>
			<h1>Exercice 1</h1>
			<form method="get" action="user.php">
				<label for="nom">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom" />
				<label for="nom">Prénom</label>
				<input type="text" name="prenom" placeholder="Ex: Jacques" id="prenom" />
				<button type="submit">Envoi</button>
			</form>
		</article>
		<article>
			<h1>Exercice 2</h1>
			<form method="post" action="user.php">
				<label for="nom2">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom2"/>
				<label for="prenom2">Prénom</label>
				<input type="text" name="prenom2" placeholder="Ex: Jacques" id="prenom2"/>
				<button type="submit">Envoi</button>
			</form>
		</article>
		<article>
			<h1>Exercice 3</h1>
			<form method="post" action="formulaire.php">
				<label for="civilite">Civilite</label>
				<SELECT name="civilite" id="civilite">
					<option value="madame">Madame</option>
					<option value="monsieur">Monsieur</option>
				</SELECT>
				<label for="nom3">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom3"/>
				<label for="prenom3">Prénom</label>
				<input type="text" name="prenom3" placeholder="Ex: Jacques" id="prenom3"/>
				<button type="submit">Envoi</button>
			</form>
			
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