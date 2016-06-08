<?php
require __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

function view($tpl, $data=[]){
	$template = new League\Plates\Engine(__DIR__ . '/Views/');
	return $template->render($tpl, $data);
}

$app['debug'] = true;

require 'routes.php';

$app->run();