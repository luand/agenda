<?php

class Usuarios extends Controller {

	
	public function __load(){

		if(!isset($_SESSION['logged']))
			$this->redirect('user/login');
	}

	public function index(){

		$usuario = $this->loadModel('Usuario_model');

		$usuarios = $usuario->findAll();

		$template = $this->loadView('usuarios_view');
		$template->set(Array('usuario' => $_SESSION['usuario'], 'usuarios' => $usuarios, 'count' => 1));
		// Define os dados na pagina view principal

		$template->render();
	}


	


	public function add($save = false){

		if($save){
			$this->save();
			return null;
		}


		$usuario   = $this->loadModel('Usuario_model');
		$usuarios  = $usuario->findAll();

		$docente   = $this->loadModel('Docente_model');
		$docentes  = $docente->findAll();

		$template = $this->loadView('formularios/usuarioform_view');
		$fields = Array('pessoa' => false, 'senha' => false);
		$template->set(Array(
							'usuario' => $_SESSION['usuario'],
							'usuario_fields' => $fields,
							'docentes' => $docentes
							)
					);

		$template->render();
	}


		private function save() {

			$erro = false;
			
			global $config;

			$fields = Array('pessoa', 'senha');

			$usuario = $this->loadModel('Usuario_model');
			$request = $this->request($fields);
			$request['senha'] =  sha1($request['senha'].$config['salt']);// Aplica o sha1 com SALT antes de salvar na base

			$duplicado = $usuario->find(Array('pessoa' => $request['pessoa']));
			
			if($duplicado){
				$erro = 'Já existe um usuário cadastrado para esse docente';
			}else{
				$usuario->set($fields, $request);
				$insert = $usuario->persist();

				if(!$insert)
					$erro = 'Falha ao inserir';
			}

			if($erro){
	
				$usuarios  = $usuario->findAll();

				$docente   = $this->loadModel('Docente_model');
				$docentes  = $docente->findAll();

				$template = $this->loadView('formularios/usuarioform_view');
				$template->set(Array(
									'usuario' => $_SESSION['usuario'],
									'usuario' => $request,
									'docentes' => $docentes,
									'erro' => $erro
									)
							);

				$template->render();

			}else{
				$this->redirect('usuarios');
			}			

		}


	public function delete($id) {
		
		$usuario = $this->loadModel('Usuario_model');
		$usuario->delete(Array('id' => $id));

		$this->redirect('usuarios');		

	}


}

?>
