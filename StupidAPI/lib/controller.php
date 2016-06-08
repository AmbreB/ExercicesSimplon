<?php
	class Controller {

		private $page;
		private $pages = [
			'home' => '../views/home.php',
			'show' => '../views/show.php'
		];
		public function __construct() {
			$this->page = $this->router();

		}
		public function getHome(){

		}
		private function router(){
			if (isset($_GET['page']) && array_key_exists($_GET['page'], $this->pages)){
				return 
			}
		}
	}
?>