<?php
class Sapiens extends Homo {
	private $guerre = false;

	public function __construct(){
		$this->feu = true;
		parent::__construct();
	}
	public function output(){
		$out = '<h2>Sapiens</h2>';
		$out .= $this->toHtml('Sapiens a un ADN', $this->adn);
		$out .= $this->toHtml('Sapiens fait la guerre', $this->guerre);
		$out .= $this->toHtml('Sapiens fait du feu', $this->feu);
		$out .= $this->toHtml('Sapiens se tient debout', $this->debout);
		return $out;
	}
	private function toHtml($titre, $valeur){
		if($valeur === true){
			$toText = 'vrai';
		} else {
			$toText = 'faux';
		}
		return '<li><b>' . $titre . '</b> : ' . $toText . '</li>';
	}
}
?>