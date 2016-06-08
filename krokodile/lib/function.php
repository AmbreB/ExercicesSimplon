<?php
function asset(){
	return 'http://andrea.dev/exercices/krokodile/public/';
}
function database(){
	ORM::configure('mysql:host=localhost;dbname=fake');
	ORM::configure('username', 'root');
	ORM::configure('password', 'root');
	ORM::configure('error_mode', PDO::ERRMODE_WARNING);
	ORM::configure('return_result_sets', true);
}

function d($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

?>