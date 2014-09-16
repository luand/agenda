<?php

class Concorrencias extends Controller {

	
	public function __load(){

		if(!isset($_SESSION['logged']))
			$this->redirect('usuario/login');
	}

	/*
		Carrega a pagina principal
		http://site.com/
	*/
	public function index(){

		$busca = $this->request('busca');

		var_dump($busca);
		//exit;

		$concorrencia = $this->loadModel('Concorrencia_model');

		if($busca){

			$concorrencias  = $concorrencia->findAll(Array('numero' => $busca));
		}else{
			$concorrencias  = $concorrencia->findAll();
		}
		

		$template = $this->loadView('concorrencia_view');
		$template->set(Array('usuario' => $_SESSION['usuario'],'concorrencias' => $concorrencias));
		// Define os dados na pagina view principal

		$template->render();
	}

}

?>