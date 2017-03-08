<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>formulaire</title>
</head>
<body>
	<section>
		<article>
			<h1>Formulaire 1</h1>
			<form method="get" action="user.php">
				<label for="nom">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom" />
				<label for="nom">Prénom</label>
				<input type="text" name="prenom" placeholder="Ex: Jacques" id="prenom" />
				<button type="submit">Envoi</button>
			</form>
		</article>
		<article>
			<h1>Formulaire 2</h1>
			<form method="post" action="user.php">
				<label for="nom2">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom2"/>
				<label for="prenom2">Prénom</label>
				<input type="text" name="prenom2" placeholder="Ex: Jacques" id="prenom2"/>
				<button type="submit">Envoi</button>
			</form>
		</article>
		<article>
			<h1>Formulaire 3</h1>
			<?php
				if(isset($_GET['nom3']) &&isset($_GET['prenom3'])){
					$resultat= htmlspecialchars($_GET['civilite'].' '.$_GET['nom3'].' '.$_GET['prenom3']);
					echo $resultat;
					?><a href="formulaire.php"><button type="button">Retour</button></a><?php
				}else{
			?>
			<form method="get" action="formulaire.php">
				<label for="civilite">Civilite</label>
				<SELECT name="civilite" id="civilite">
					<option value="madame">Madame</option>
					<option value="monsieur">Monsieur</option>
				</SELECT>
				<label for="nom3">Nom</label>
				<input type="text" name="nom3" placeholder="Ex: Dupond" id="nom3"/>
				<label for="prenom3">Prénom</label>
				<input type="text" name="prenom3" placeholder="Ex: Jacques" id="prenom3"/>
				<button type="submit">Envoi</button>
			</form>
			<?php		
				}
			?>
		</article>
	</section>
</body>
</html>