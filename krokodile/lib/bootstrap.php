<?php
require BASE . 'vendor/autoload.php';
require 'function.php';
require 'classes/Bidule.php';
require 'classes/Router.php';
require 'classes/models/Model.php';
require 'classes/models/Counter.php';

database();
$r = new Router;
$r->get();

?>