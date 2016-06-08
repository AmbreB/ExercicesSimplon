<?php 

namespace Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller {

	public function index(){
		return view('test');
	}

	public function hello(){
		return view('hello');
	}

}