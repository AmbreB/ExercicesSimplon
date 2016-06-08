<?php
namespace Controllers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;
use Controllers\Controller;
use Models\User;

/*
	RTFM : Paris pour l'ORM & Plates pour les templates

	la fonction view() existe dans le fichier bootstrap.php et sert à générer
	une vie, elle reprend les arguments de la méthode render() de Plates
	http://platesphp.com/simple-example/

	Request $request N'utilisez pas de superglobales, utilisez plutot l'interface Request fournie 
	par Silex
	
	http://api.symfony.com/master/Symfony/Component/HttpFoundation/Request.html

*/
class UsersController extends Controller {

	public function index(Request $request){
		$users = User::find_many();

		$tri = $request->query->get('tri');
		$direction = $request->query->get('direction');

		if (isset($tri)){
			$users = $this->sortTable($tri, $direction);
		}

		return view('users/index', ["users"=>$users]);
	}

	public function create(){
		return view('users/add');
	}

	public function postCreate(Request $request){
		$users = User::create();
		$users->set($request->request->all());
		$users->save();
		return $this->show($users->id);
	}
	
	public function show($id){
		$user = User::find_one($id);
		return view('users/show', ['user'=>$user]);
	}

	public function edit($id){
		$user = User::find_one($id);
		return view('users/edit', ['user'=>$user]);
	}
	
	public function postEdit(Request $request, $id){
		$users = User::find_one($id);
		$users->set($request->request->all());
		$users->save();
		return $this->show($id);
	}
	
	public function postDelete(Request $request, Application $app, $id){
		$user = User::find_one($id);
		$user->delete();
		return $app->redirect('/users');
	}
	public function sortTable($tri, $direction) {
		if ($direction == 'asc') {
			return User::order_by_asc($tri)->find_many();
		} elseif ($direction == 'dsc' ) {
			return User::order_by_desc($tri)->find_many();
		} 
	}

}