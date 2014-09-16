<?php

class Usuario extends Controller {

	
	/*
		Carrega a pagina principal
		http://site.com/
	*/
	public function login(){
		
		$request = $this->request(Array('email', 'senha'));

		$erro =  null;
		
		if($request['email'] && $request['senha']){

			global $config;

			$usuario = $this->loadModel('Usuario_model');
			$pessoa  = $this->loadModel('Pessoa_model');

			$dados = $pessoa->find(Array('email'   => $request['email']));
			
			$login = $usuario->find(Array('pessoa' => $dados['id'], 'senha' => sha1($request['senha'].$config['salt']) ));

			if($login || 1){ // debug, deve
				$_SESSION['logged'] = true;
				$_SESSION['usuario'] = $login;
				$this->redirect('pregoes');
			}else{
				$erro = 'Email ou senha inválidos.';
			}
		}
			
		$template = $this->loadView('login_view');
		$template->set('erro', $erro);
		$template->render();

			
	}

	public function logout(){

		session_destroy();
		$this->redirect('usuario/login');
	
	}


}

   
?>
