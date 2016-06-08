<?php
	$lang = [
		"JavaScript" => true, 
		"HTML" => true, 
		"CSS" => true, 
		"Ruby" => false,
		"PHP" => false,
		"C++" => false
	];

	// On boucle sur un tableau en PHP avec foreach(tableau as valeur du tableau)

	// foreach($lang as $valeur){
	// 	echo $valeur . "\n";
	// }

	// avec foreach, on peut récupérer la clé d'une valeur d'un tableau 


	function iKnow($language, $known){
		if ($known == true) {
			return "Je connais " . $language;
		} else {
			return "Je ne connais pas " . $language;
		}
	}

	foreach($lang as $key => $valeur){
		echo iKnow($key, $valeur);
		echo "\n";
	}
