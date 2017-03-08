<?php
	if (isset($_GET['langage']) and isset($_GET['serveur'])){
		echo $_GET['langage'].' '.$_GET['serveur'];
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