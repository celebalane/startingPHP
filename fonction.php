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

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<title>Fonction</title>
</head>
<body>
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
				
			?>
		</article>
		<article>
		<h1>Exercice 5</h1>
			<?php
				
			?>
		</article>
	</section>
</body>
</html>