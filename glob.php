<?php

/*
	Variables Superglobales

	$_SERVER;
	$_GET;
	$_POST;
	$_COOKIE;
	$_FILES;
	$_SESSION;
	$_REQUEST;
	$_ENV;
*/

	// print_r($_GET);
	// echo 'Bonjour ' . $_GET["nom"];

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

	echo generation($_GET["age"]);
