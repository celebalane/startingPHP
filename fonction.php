<?php
//Exo 1
function vraie(){
	return 'true';
}

//Exo 2 
function chaine($coucou){
	return $coucou;
}

//Exo 3
function concatenation($caractere1,$caractere2){
	return $caractere1.$caractere2;
}

//Exo 4
function comparaison($nombre1, $nombre2){
	if ($nombre1>$nombre2){
		return 'le premier nombre est le plus grand';
	}elseif ($nombre1<$nombre2) {
		return 'le deuxième nombre est le plus grand';
	}else{
		return 'les nombres sont égaux';
	}
}

//Exo 5
function mixage($nombre,$chaine){
	if (is_int($nombre)){
		return $nombre.$chaine;
	}else{
		return 'Veuillez entrer un nombre';
	}
}

//Exo 6
function bonjour($nom,$prenom,$age){
	if (is_int($age)){
		return "Bonjour ".$nom.' '.$prenom.', tu as '.$age.' ans';
	}
}

//Exo 7
function majorite($age,$genre){
	if ($age>=18){
		if($genre == 'homme'){
			return 'Vous êtes un homme et vous êtes majeur';
		}else{
			return'Vous êtes une femme et vous êtes majeure';
		}
		}else{
			if($genre == 'homme'){
				return 'Vous êtes un homme et vous êtes mineur';
			}else{
				return 'Vous êtes une femme et vous êtes mineure';
			}
		}
}

//Exo 8
function addition($nombre1=1,$nombre2=1,$nombre3=1){
	if (is_int($nombre1)&& is_int($nombre2) && is_int($nombre3)){
		return $nombre1+$nombre2+$nombre3;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/page.css">
	<title>Fonction</title>
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
				echo vraie();
			?>
		</article>
		<article>
			<h2>Exercice 2</h2>
				<?php
					echo chaine('coucou');
				?>
		</article>
		<article>
			<h2>Exercice 3</h2>
			<?php
				echo concatenation('cou','cou');
			?>
		</article>
		<article>
			<h2>Exercice 4</h2>
			<?php
				echo comparaison(45,67);
			?>
		</article>
		<article>
			<h2>Exercice 5</h2>
			<?php
				echo mixage(30,' ans');
			?>
		</article>
		<article>
			<h2>Exercice 6</h2>
			<?php
				echo bonjour('Leterme','Emilie',30);
			?>
		</article>
		<article>
			<h2>Exercice 7</h2>
			<?php
				echo majorite(18,'homme');
			?>
		</article>
		<article>
			<h2>Exercice 8</h2>
			<?php
				echo addition(3,3,3);
			?>
		</article>
	</section>
</body>
</html>