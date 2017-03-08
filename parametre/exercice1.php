<?php
	if (isset($_GET['nom']) and isset($_GET['prenom'])){
		echo $_GET['nom'].' '.$_GET['prenom'];
	}else{
		echo "erreur";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
	<title>Exercice 1</title>
</head>
<body>
<a href="../parametre.php">Retour</a>
</body>
</html>