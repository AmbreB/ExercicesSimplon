<?php
	$monTableau = array(10, "février", 1994);
	print_r($monTableau);
	$tabCourt = [10, "février", 1994];
	print_r($tabCourt);
	// echo $tabCourt[1]; 
	$alpha = [ 	"jour" 	=> 10, "mois" => "Février", "année"	=> 1994 ];
	print_r($alpha);
	echo $alpha["mois"];

	// Les super globales sont des variables définies par le serveur