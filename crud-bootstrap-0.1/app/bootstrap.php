<?php
require 'vendor/autoload.php';

function config($key){
	$conf = require 'config.php';
	return $conf[$key];
} 

function dd($var){
	echo join('',[
		'<pre>',
		var_dump($var),
		'</pre>'
	]);
	die();
}

function view($tpl, $data = []){
	$templates = new League\Plates\Engine(__DIR__ . '/Views/');
	return $templates->render($tpl, $data);
}

ORM::configure('mysql:host='.config('db_host').';dbname='.config('db_name'));
ORM::configure('username', config('db_user'));
ORM::configure('password', config('db_password'));

$app = new Silex\Application();

$app['debug'] = true;

require 'routes.php';

$app->run();

