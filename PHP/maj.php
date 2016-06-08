<?php
/*
	$prenom = "andréa";
	$nom = "Buisset"
	echo $prenom;
	echo "\n";
	echo ucfirst($prenom);
	echo "\n";
*/
// Commentaire sur une seule ligne

/*

	Commentaire 
	Multiligne
	BORDEL

*/

# NON MAIS ALLO, UN COMMENTAIRE AVEC UN DIESE QUOI.

// Première fonction !

	function concatNom($prenom, $nom){
		$fullName = ucfirst($prenom)." ".ucfirst($nom);
		return $fullName;
	}

	$monNom = concatNom("andrea", "buisset");
	echo $monNom . "\n";