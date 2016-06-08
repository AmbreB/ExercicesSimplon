<?php

$app->get('/', 'Controllers\\Controller::index');
$app->get('/hello', 'Controllers\\Controller::hello');