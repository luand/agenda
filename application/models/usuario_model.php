<?php

class Usuario_model extends Model {
	
public function map(){

		$this->map->table  		= 'usuario';
		$this->map->fields 		= Array('id','pessoa.nome as nome', 'pessoa.email as email', 'senha');
		$this->map->relations 	= Array('pessoa' => 'pessoa.id');

		return $this->map;
	
	}

}

?>
