<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Formulaire</title>
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
			<h2>Formulaire 1</h2>
			<form method="get" action="user.php">
				<label for="nom">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom" />
				<label for="nom">Prénom</label>
				<input type="text" name="prenom" placeholder="Ex: Jacques" id="prenom" />
				<button type="submit">Envoi</button>
			</form>
		</article>
		<article>
			<h2>Formulaire 2</h2>
			<form method="post" action="user.php">
				<label for="nom2">Nom</label>
				<input type="text" name="nom" placeholder="Ex: Dupond" id="nom2"/>
				<label for="prenom2">Prénom</label>
				<input type="text" name="prenom2" placeholder="Ex: Jacques" id="prenom2"/>
				<button type="submit">Envoi</button>
			</form>
		</article>
		<article>
			<h2>Formulaire 3</h2>
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