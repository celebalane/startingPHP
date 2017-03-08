<?php
	if (isset($_GET['nom']) and isset($_GET['prenom'])){
		echo $_GET['nom'].' '.$_GET['prenom'];
	}else{
		echo "erreur";
	}

?>