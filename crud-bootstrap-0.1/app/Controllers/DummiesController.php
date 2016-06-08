<?php
namespace Controllers;

use Controllers\Controller;
use Models\Dummy;

/*
	RTFM : Paris pour l'ORM & Plates pour les templates

	la fonction view() existe dans le fichier bootstrap.php et sert à générer
	une vie, elle reprend les arguments de la méthode render() de Plates
	http://platesphp.com/simple-example/

	Request $request N'utilisez pas de superglobales, utilisez plutot l'interface Request fournie 
	par Silex
	
	http://api.symfony.com/master/Symfony/Component/HttpFoundation/Request.html

*/
class DummiesController extends Controller {
	public function hello($name){
		return view('dummies/hello', ['name' => $name, 'conf' => config('db_host')]);
	}

	public function index(){
		$dummies = Dummy::find_many();
		return view('dummies/index', ["dummies"=>$dummies]);
	}

	public function create(){}

	public function postCreate(Request $request){
		dd($request);
	}
	
	public function show(){}

	public function edit(){}
	
	public function postEdit(){}
	
	public function postDelete(){}

}