<?php

function routing() {
	if (!isset($_GET['p'])) {
		view('truc');
		return;
	} 
	$page = $_GET['p'];
	view($page);
}

function view($file) {
	$correct = ['hello', 'things', 'truc'];

	if (!in_array($file, $correct)) {
		echo 'erreur 404';
		die();
	}

	require '../views/' . $file . '.php';
}

function dd($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	die();
}

?>