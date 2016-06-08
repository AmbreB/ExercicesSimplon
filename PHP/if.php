<?php
/*
	function generation($age){
		if ($age < 16){
			echo "Tu es un enfant\n";
		} elseif($age == 18) {
			echo "Bravo, on peut faire la fête \n";
		} elseif($age > 18) {
			echo "Tu es un adulte\n";
		} else {
			echo "Euh, c'est louche...\n";
		}
	}
	echo generation(18);
	echo generation(15);
	echo generation(20);
	echo generation(false);
*/
	function generation($age){
		$resultat = "Euh, c'est louche...\n";

		if ($age <= 17){
			$resultat = "Tu es un enfant\n";
		} elseif($age == 18) {
			$resultat = "Bravo, on peut faire la fête \n";
		} elseif($age > 18) {
			$resultat = "Tu es un adulte\n";
		} else {
			$resultat = "Euh, c'est louche...\n";
		}
		return $resultat;
	}

	echo generation(18); // Fête
	echo generation(17); // Enfant
	echo generation(20); // Adulte
	echo generation(false); // Enfant
	echo generation(array(1, 2, 3)); // Adulte ???????
	