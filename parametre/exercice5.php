<?php
	if (isset($_GET['semaine'])){
		echo $_GET['semaine'];
	}else{
		echo "Le paramètre n'existe pas";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../style/css/style.css">
	<title>Exercice 5</title>
</head>
<body>
<a href="../parametre.php">Retour</a>
</body>
</html>