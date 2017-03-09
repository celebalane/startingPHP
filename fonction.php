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
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Fonction</title>
</head>
<body>
	<nav>
		<a href="index.php"><h1>Les exercices</h1></a>
		<a href="variable.php">Exercice 1</a>
		<a href="condition.php">Exercice 2</a>
		<a href="boucle.php">Exercice 3</a>
		<a href="fonction.php">Exercice 4</a>
		<a href="tableau.php">Exercice 5</a>
		<a href="parametre.php">Exercice 6</a>
		<a href="formulaire.php">Exercice 7</a>
		<a href="superglobale.php">Exercice 8</a>
		<a href="date.php">Exercice 9</a>
	</nav>
	<section>
		<article>
			<h1>Exercice 1</h1>
			<?php
				echo vraie();
			?>
		</article>
		<article>
			<h1>Exercice 2</h1>
				<?php
					echo chaine('coucou');
				?>
		</article>
		<article>
			<h1>Exercice 3</h1>
			<?php
				echo concatenation('cou','cou');
			?>
		</article>
		<article>
			<h1>Exercice 4</h1>
			<?php
				echo comparaison(45,67);
			?>
		</article>
		<article>
			<h1>Exercice 5</h1>
			<?php
				echo mixage(30,' ans');
			?>
		</article>
		<article>
			<h1>Exercice 6</h1>
			<?php
				echo bonjour('Leterme','Emilie',30);
			?>
		</article>
		<article>
			<h1>Exercice 7</h1>
			<?php
				echo majorite(18,'homme');
			?>
		</article>
		<article>
			<h1>Exercice 8</h1>
			<?php
				echo addition(3,3,3);
			?>
		</article>
	</section>
</body>
</html>