<?php

class Pregao_model extends Model {

	public function map(){

		$this->map->table  		= 'pregao';
		$this->map->fields 		= Array(
								  'idarquivo', 
								  'modalidade',
								  'numero',
								  'comissao',
								  'processo',
								  'nsistema',
								  'dataentrada',
								  'dataenviada',
								  'diaspendentes',
								  'datapossivel',
								  'periodoretirada',
								  'dataabertura',
								  'horaabertura',
								  'qntdias',
								  'numerooficio',
								  'orgaorequisitante',
								  'recurso',
								  'objeto',
								  'status',
								  'estimadaprojetado',
								  'estimadoreal',
								  'adjudicado',
								  'valoresexpurgados',
								  'tipo',
								  'bens',
								  'observacao');

		return $this->map;
	
	}


}

?>
