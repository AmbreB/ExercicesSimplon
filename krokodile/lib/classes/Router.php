<?php 

class Router {
	private $defaultPage = 'home';
	public function get(){

		if($this->detectAjax()){
			return $this->incrementCounter($_GET['id']);
		}

		if(isset($_GET['page'])) {
        	$page = $_GET['page'];
        } else {
            $page = $this->defaultPage;
        }

		if($page === 'add' && isset($_POST['name'])){
			$this->addCounter($_POST);
			$page = 'home';
		} 


		require BASE . 'views/' . $page . '.php';
	}
	public function detectAjax(){
		if(isset($_GET['ajax'])){
			return true;
		}
		return false;
	}
	public function addCounter($data){
		$C = new Counter();
		return $newCounter = $C->add($data);
	}
	public function incrementCounter($id){
		$C = new Counter();
		$newvalue = $C->increment($id);
		echo json_encode(['id'=>$id, 'count'=>$newvalue]);
	}
}