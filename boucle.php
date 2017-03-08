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

 				while ($uneVariable < 10) {
 				$uneVariable += 1;
 				echo $uneVariable.'<br>';
 				}
			?>
		</article>
	</section>
</body>
</html>