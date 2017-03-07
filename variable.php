
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Variables</title>
</head>
	<body>
		<section>
			<article>
				<?php
					//Exo 1
					$name = 'Emilie<br>';
					echo $name;
				?>
			</article>
			<article>
				<?php
					//Exo 2
					$nom = 'Leterme';
					$prenom = 'Mango';
            		$age = 1;
            		echo 'Nom: '.$nom.', Prénom: '.$prenom.', Age: '.$age.'<br>';
            	?>
            </article>
            <article>
            	<?php
            		//Exo 3
            		$kilometre = 1;
            		echo 'kilometre: '.$kilometre.'<br>';
            		$kilometre = 3;
            		echo 'kilometre: '.$kilometre.'<br>';
            		$kilometre = 125;
            		echo 'kilometre: '.$kilometre.'<br>';
            	?>
            </article>
            <article>
            	<?php
            		//Exo 4
            		$animal='chat';
            		$mois= 4;
            		$poids = 4.5;
            		$male = true;
            		echo 'Animal: '.$animal.', Mois de naissance: '.$mois.', Poids: '.$poids.', Sexe: '.$male.'<br>';
            	?>
            </article>
            <article>
            	<?php
            		//Exo 5
					$nombre;
					echo $nombre;
					$nombre = 2;
					echo 'Nombre: '.$nombre.'<br>';
				?>
			</article>
			<article>
				<?php
					//Exo 6
					$nom = 'Mango';
					echo 'Bonjour '.$nom.', comment vas-tu?';
				?>
			</article>
			<article>
				<?php
					//Exo 7
					$nom = 'Leterme';
					$prenom= 'Emilie';
					$age = 30;

					echo 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.<br>';
				?>
			</article>
			<article>
				<?php
					$addition = 3+4;
					$multi = 5*20;
					$division = 45/5;
					echo 'Résultats :<br>'.$addition.'<br>'.$multi.'<br>'.$division.'<br>';
				?>
			</article>
		</section>
	</body>
</html>