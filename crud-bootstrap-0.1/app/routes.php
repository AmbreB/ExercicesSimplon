<?php
/*
	RTFM : Silex
*/

$app->get('/', 'Controllers\\Controller::index');

$app->get('/dummies', 'Controllers\\DummiesController::index');
$app->get('/hello/{name}', 'Controllers\\DummiesController::hello')->value('name', 'inconnu');

/* Start here ! */

//liste des utilisateurs
$app->get('/users', 'Controllers\\UsersController::index');


//formulaire d'édition, traitement du formulaire
$app->get('/users/{id}/edit', 'Controllers\\UsersController::edit');
$app->post('/users/{id}/edit', 'Controllers\\UsersController::postEdit');

//formulaire de création, traitement du formulaire
$app->get('/users/create', 'Controllers\\UsersController::create');
$app->post('/users/create', 'Controllers\\UsersController::postCreate');

//suppression d'un utilisateur
$app->post('/users/{id}/delete', 'Controllers\\UsersController::postDelete');

// détails d'un utilisateur
$app->get('/users/{id}', 'Controllers\\UsersController::show');
