<?php
	if (isset($_GET['batiment']) and isset($_GET['salle'])){
		echo htmlspecialchars($_GET['batiment'].' '.$_GET['salle']);
	}else{
		echo "Les paramètres n'existent pas";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
	<title>Exercice 6</title>
</head>
<body>
<a href="../parametre.php">Retour</a>
</body>