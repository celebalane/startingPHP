<?php
	require_once 'class/Formulaire.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test formulaire</title>
</head>
<body>
	<?php
		$form = new Formulaire('contact');
		$form->debut('testFormulaire.php');
		$form->inputText('pseudo',$_GET['pseudo']);
		$form->inputText('nom',$_GET['nom']);
		$form->valid();
	?>
</body>
</html>

	

