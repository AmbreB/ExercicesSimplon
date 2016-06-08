<?php

class Model {

	protected $db;
	protected $table;

	public function __construct(){
		$this->db = ORM::for_table($this->table);
	}

}