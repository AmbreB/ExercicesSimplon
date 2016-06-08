<?php
	$nom = "Andréa\n"; // POINT VIRGULE OBLIGATOIRE /!\ Sinon ça plante...
	$age = 21;
	$majeurDepuis = ($age - 18);
	$phrase = "Je suis majeur depuis ". $majeurDepuis . " ans";
	echo $phrase;
	echo '\n';
	echo "coucou";
	echo "\n";
	echo "coucou";
	echo 'bonjour
	ça va ?'; // Ca affiche vraiment le retour à la ligne ! OMG