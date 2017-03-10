<?php
	//Exo 1
	$age = 30;

	if ($age>=18){
		$resultatAge='Vous êtes majeur';
	}else{
		$resultatAge='Vous êtes mineur';
	}
	//Exo 2
	$isEasy = true;

	if ($isEasy){
		$resultatEasy= "C'est facile!";
	}else{
		$resultatEasy="C'est difficile :(";
	}
	//Exo 3
	$age2 = 24;
	$genre ='femme';

	if ($age2>=18){
		if($genre == 'homme'){
			$resultatGenre= 'Vous êtes un homme est vous êtes majeur';
		}else{
			$resultatGenre='Vous êtes une femme est vous êtes majeure';
		}
		}else{
			if($genre == 'homme'){
				$resultatGenre= 'Vous êtes un homme est vous êtes mineur';
			}else{
				$resultatGenre= 'Vous êtes une femme est vous êtes mineure';
			}
		}
	//Exo 4
	$magnitude=1;

	switch ($magnitude) {
    	case 1:
        	$resultatMagnitude= "Micro-séisme impossible à ressentir.";
        	break;
    	case 2:
        	$resultatMagnitude= "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
        	break;
    	case 3:
        	$resultatMagnitude= "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
        	break;
        case 4:
        	$resultatMagnitude= "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
        	break;
        case 5:
        	$resultatMagnitude= "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
        	break;
        case 6:
        	$resultatMagnitude= "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
        	break;
        case 7:
        	$resultatMagnitude= "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
        	break;
        case 8:
        	$resultatMagnitude= "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
        	break;
        case 9:
        	$resultatMagnitude= "Séisme capable de tout détruire sur une très vaste zone.";
        	break;
        default : $resultatMagnitude= 'Veuillez rentrer un chiffre valide';
	}

	//Exo 5 traduction
	$maVariable ='Femme';

	if($maVariable != 'Homme'){
		$maVariable= 'C\'est une développeuse !!!';
	}else{
		$maVariable= 'C\'est un développeur !!!';
	}

	//Exo 6 traduction
	$maVariable2 = false;

	if($maVariable2 == false){
		$maVariable2= 'c\'est pas bon !!!';
	}else{
		$maVariable2= 'c\'est ok !!';
	}

	//Exo 7 traduction

	$monAge = 30;

	if($monAge>=18){
		$monAge= 'Tu es majeur';
	}else{
		$monAge='Tu n\'est pas majeur';
	}

	//Exo 8 traduction

	$maVariable3 = true;

	if($maVariable3){
		$maVariable3= 'c\'est ok !!';
	}else{
		$maVariable3= 'c\'est pas bon !!!';
	}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Variables</title>
</head>
	<body>
		<nav>
			<ul id="nav">
				<li><a href="variable.php"><img src="img/variable.svg" id="img1" /><p>Variables</p></a></li>
				<li><a href="condition.php"><img src="img/condition.svg" id="img2" /><p>Conditions</p></a></li>
				<li><a href="boucle.php"><img src="img/boucle.svg" id="img3" /><p>Boucles</p></a></li>
				<li><a href="fonction.php"><img src="img/fonction.svg" id="img4" /><p>Fonctions</p></a></li>
				<li><a href="tableau.php"><img src="img/tableau.svg" id="img5" /><p>Tableaux</p></a></li>
				<li><a href="parametre.php"><img src="img/parametre.svg" id="img6" /><p>Paramètres</p></a></li>
				<li><a href="formulaire.php"><img src="img/formulaire.svg" id="img7" /><p>Formulaires</p></a></li>
				<li><a href="superglobale.php"><img src="img/superglobale.svg" id="img8" /><p>Superglobales</p></a></li>
				<li><a href="date.php"><img src="img/date.svg" id="img9" /><p>Dates</p></a></li>
				<li><a href="td.php"><img src="img/td.svg" id="img10" /></li></a>
				</ul>
		</nav>
		<section>
			<article>
			<h2>Exercice 1</h2>
				<?php
					echo $resultatAge;
				?>
			</article>
			<article>
				<h2>Exercice 2</h2>
				<?php
					echo $resultatEasy;
				?>
			</article>
			<article>
				<h2>Exercice 3</h2>
				<?php
					echo $resultatGenre;

				?>
			</article>
			<article>
				<h2>Exercice 4</h2>
				<?php
					echo $resultatMagnitude;
				?>
			</article>
			<article>
				<h2>Exercice 5/6/7/8</h2>
					<p>Voir le code!</p>
					<?php
						echo $maVariable;
						echo $maVariable2;
						echo $maVariable3;
						echo $monAge;
					?>
			</article>
		</section>
	</body>
</html>