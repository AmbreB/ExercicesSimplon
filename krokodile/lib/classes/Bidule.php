<?php

class Bidule {
	private $truc = true;
	public $foo = 'lol';

	public function getTruc(){
		return $this->truc;
	}
	public function setTruc($val){
		$this->truc = $val;
	}
	public function doThings(){
		return $this->getTruc();
	}
}
