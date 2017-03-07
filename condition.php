<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Variables</title>
</head>
	<body>
		<section>
			<article>
			<h1>Exercice 1</h1>
				<?php
					$age = 30;

					if ($age>=18){
						echo 'Vous êtes majeur';
					}else{
						echo 'Vous êtes mineur';
					}
				?>
			</article>
			<article>
				<h1>Exercice 2</h1>
				<?php
					$isEasy = true;

					if ($isEasy){
						echo "C'est facile!";
					}else{
						echo "C'est difficile :(";
					}
				?>
			</article>
			<article>
				<h1>Exercice 3</h1>
				<?php
					$age = 24;
					$genre ='femme';

					if ($age>=18){
						if($genre == 'homme'){
							echo 'Vous êtes un homme est vous êtes majeur';
						}else{
							echo 'Vous êtes une femme est vous êtes majeure';
						}
					}else{
						if($genre == 'homme'){
							echo 'Vous êtes un homme est vous êtes mineur';
						}else{
							echo 'Vous êtes une femme est vous êtes mineure';
						}
					}

				?>
			</article>
		</section>
	</body>
</html>