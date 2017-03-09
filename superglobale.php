<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Dates</title>
</head>
<body>
	<section>
		<article>
			<h1>Exercice 1</h1>
			<?php
				echo "Votre user agent est: ".$_SERVER['HTTP_USER_AGENT'].", votre adresse IP est: ".$_SERVER['SERVER_ADDR'].", et le nom de votre serveur est: ".$_SERVER['SERVER_NAME'];
			?>
		</article>	
	</section>
</body>
</html>