<?php

class Pessoa_model extends Model {

	public function map(){

		$this->map->table  		= 'pessoa';
		$this->map->fields 		= Array('id','nome', 'email');
		$this->map->limit 		= 100; 

		return $this->map;
	
	}


}

?>
