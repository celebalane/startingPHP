<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Formulaire</title>
</head>
<body>
	<nav>
		<h1>Les exercices</h1>
		<a href="variable.php">Exercice 1</a>
		<a href="condition.php">Exercice 2</a>
		<a href="boucle.php">Exercice 3</a>
		<a href="fonction.php">Exercice 4</a>
		<a href="tableau.php">Exercice 5</a>
		<a href="parametre.php">Exercice 6</a>
		<a href="formulaire.php">Exercice 7</a>
		<a href="superglobale.php">Exercice 8</a>
	</nav>
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
				if(isset($_POST['nom3']) && isset($_POST['prenom3'])){ 
					$extension = explode('.',$_FILES['fichier']['name']);
					if($extension[1]=='pdf' && $_FILES['fichier']['type']== 'application/pdf'){
						
							$resultat= htmlspecialchars($_POST['civilite'].' '.$_POST['nom3'].' '.$_POST['prenom3'].' '.$_FILES["fichier"]["name"]);
							
					}else{
						$resultat= 'Erreur, veuillez envoyer un PDF';
					}
					echo $resultat;
				
				?>
				<a href="formulaire.php"><button type="button">Retour</button></a>
				<?php
				}else{
			?>
			<form method="post" action="formulaire.php" enctype="multipart/form-data">
				<label for="civilite">Civilite</label>
				<SELECT name="civilite" id="civilite">
					<option value="madame">Madame</option>
					<option value="monsieur">Monsieur</option>
				</SELECT>
				<label for="nom3">Nom</label>
				<input type="text" name="nom3" placeholder="Ex: Dupond" id="nom3"/>
				<label for="prenom3">Prénom</label>
				<input type="text" name="prenom3" placeholder="Ex: Jacques" id="prenom3"/>
				<input type="file" name="fichier" />
				<input type="hidden" name="MAX_FILE_SIZE" value="100000">

				<button type="submit">Envoi</button>
			</form>
			<?php		
				}
			?>
		</article>
	</section>
</body>
</html>