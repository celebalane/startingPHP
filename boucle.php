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
			<?php
				$premier=0;
				$deuxieme=49;

				while ( $premier < 20) {
					echo $premier*$deuxieme.' ';
					$premier ++;
				}
			?>
		</article>
	</section>
</body>
</html>