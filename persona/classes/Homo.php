<?php
class Homo extends Faune {
	//$adn = true;
	//getADN()...
	protected $debout = true;
	protected $feu = false;
	// protected $multicellulaire = true;

	public function __construct(){
		$this->multicellulaire = true;
	}
	public function getDebout() {
		return $this->debout;
	}
	public function getFeu() {
		return $this->feu;
	}
	public function getMulti() {
		return $this->multicellulaire;
	}
}
?>