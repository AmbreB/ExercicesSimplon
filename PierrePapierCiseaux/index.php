<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<script src="app.js"></script>
	<title> Pierre, feuille, ciseaux !!</title>
</head>
<body>
	<h1> Pierre, feuille, ciseaux !</h1>

	<form method="post" action="index.php">
		<p>Faites votre choix : </p>
		<input type="radio" name="choix" value="pierre"> Pierre 
		<input type="radio" name="choix" value="feuille"> Feuille
		<input type="radio" name="choix" value="ciseaux"> Ciseaux
		<input type="submit" value="OK">
	</form><br>

<?php
function choixOrdi(){
	$tableau = array("pierre", "feuille", "ciseaux");
	$choixRandom = $tableau[array_rand($tableau)];
	echo $choixRandom . "\n";
	return $choixRandom;
}
function choixUtil(){
	$choixUtil = $_POST["choix"];
	echo $choixUtil . "\n";
	return $choixUtil;
}
function battle(){
	$tableau = array(0 => "pierre", 1 => "feuille", 2 => "ciseaux");
	$choixRandom = choixOrdi();
	$choixUtil = choixUtil();
	if ($choixRandom == $choixUtil) {
		echo "Egalite";
	} elseif (
			$choixRandom == $tableau[0] && 
			$choixUtil == $tableau[1] || 
			$choixRandom == $tableau[1] && 
			$choixUtil == $tableau[2] || 
			$choixRandom == $tableau[2] && 
			$choixUtil == $tableau[0]
		) {
		echo "Gagne";
	} else {
		echo "Perdu";
	}
}
battle();
?>

	</body>
</html>