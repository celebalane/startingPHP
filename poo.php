<?php
	require_once 'class/Personnage.php';
	
	$julien = new Personnage();
	$julien->setNom ('julien');
	$julien->pv = 70;

	$pierre = new Personnage();
	$pierre->setNom('pierre');
	$pierre->pv = 50;
	$pierre->cri = 'Grrrrrrrrr';
	$pierre->regenere();


	echo $julien->attack($pierre);
	echo $pierre->attack($julien);

	var_dump($julien);
	echo '<br>';
	var_dump($pierre);
