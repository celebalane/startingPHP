<?php

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Boucle</title>
</head>
<body>
	<section>
		<article>
			<h1>Exercice 1</h1>
			<?php
				$uneVariable = 0;

 				while ($uneVariable <= 10) {
 				
 					echo $uneVariable.' ';
 					$uneVariable ++;
 				}
			?>
		</article>
		<article>
			<h1>Exercice 2</h1>
			<?php
				$premier=0;
				$deuxieme=49;

				while ( $premier < 20) {
					echo $premier*$deuxieme.' ';
					$premier ++;
				}
			?>
		</article>
		<article>
			<h1>Exercice 3</h1>
			<?php
			 	$nombre= 100;
			 	$nombre2= 39;

			 	while ( $nombre >= 10) {
			 		echo $nombre*$nombre2.' ';
			 		$nombre-=1;
			 	}
			 ?>
		</article>
	</section>
</body>
</html>