<?php
	if(isset($_POST['month'])&&isset($_POST['year'])){
		$moment= $_POST['month'].' '.$_POST['year'];
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
		<h1>Veuillez choisir le mois et l'année :</h1>
		<form method="post" action="td.php">
			<label for="mois">Civilite</label>
			<SELECT name="month" id="mois">
				<option value="janvier">Janvier</option>
				<option value="fevrier">Février</option>
				<option value="mars">Mars</option>
				<option value="avril">Avril</option>
				<option value="mai">Mai</option>
				<option value="juin">Juin</option>
				<option value="juillet">Juillet</option>
				<option value="aout">Août</option>
				<option value="septembre">Septembre</option>
				<option value="octobre">Octobre</option>
				<option value="novembre">Novembre</option>
				<option value="decembre">Décembre</option>
			</SELECT>
			<label for="annee">Année</label>
			<SELECT name="year" id="annee">
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
			</SELECT>
			<button type="submit">Envoi</button>
		</form>
		<?php
			echo $moment; //Trouver solution pour afficher calendrier correspondant
		?>
	</section>
</body>
</html>