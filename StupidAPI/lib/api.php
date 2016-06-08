<?php
class API {
	public function getPage() {
		$reponse = ["msg" => "Coucou !", "status" => 200];
		echo json_decode($reponse);
	}
	public static function home(){
		
	}
}
?>