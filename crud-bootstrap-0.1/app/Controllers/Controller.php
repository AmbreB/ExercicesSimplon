<?php

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller {

	public function __construct(){
		
	}

	public function index() {
		return view('home');
	}

}