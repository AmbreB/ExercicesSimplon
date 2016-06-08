<?php 

function d($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function say($thing){
	echo '<h2>'. $thing .'</h2>';
}

require 'classes/Faune.php';
require 'classes/Homo.php';
require 'classes/Sapiens.php';


$faune = new Faune();
$homo = new Homo();
$sapiens = new Sapiens();

echo $sapiens->output();
echo "a"==true;