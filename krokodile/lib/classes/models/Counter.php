<?php

class Counter extends Model {

	protected $table ='counters';

	public function all(){
		// $counters = ORM::for_table('counters')->find_many();
		// $this->db === ORM::for_table($this->table);
		return $this->db->find_many();
	}
	public function get($id){
		$counter = ORM::for_table('counters')->find_one($id);
		return $counter;		
	}
	public function add($data){
		$newCounter = ORM::for_table('counters')->create();

		$newCounter->name = $data['name'];
		$newCounter->count = $data['count'];

		$newCounter->save();

		return $newCounter;
	}
	public function edit($id){

	}

	public function increment($id){
		$counter = ORM::for_table('counters')->find_one($id);
		$counter->count = $counter->count + 1;
		
		$counter->save();
		return $counter->count;
	}
}
