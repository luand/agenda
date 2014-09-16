<?php

class Pregoes extends Controller {

	
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

		$pregao = $this->loadModel('Pregao_model');

		if($busca){
			$pregoes  = $pregao->findAll(Array('numero' => $busca));
		}else{
			$pregoes  = $pregao->findAll();
		}
		
		$template = $this->loadView('pregoes_view');
		$template->set(Array('usuario' => $_SESSION['usuario'], 'pregoes' => $pregoes));
		// Define os dados na pagina view principal

		$template->render();
	}

}

?>
