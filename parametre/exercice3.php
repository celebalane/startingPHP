<?php
	if (isset($_GET['dateDebut']) and isset($_GET['dateFin'])){
		echo $_GET['dateDebut'].' '.$_GET['dateFin'];
	}else{
		echo "Les paramètres n'existent pas";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
	<title>Exercice 3</title>
</head>
<body>
<a href="../parametre.php">Retour</a>
</body>
</html>