<?php
class adminController extends Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$dados = array();

		$users = new Users();
		$users->saveUser();
		$users->editUser();
		$tipo = new Documentos();
		$tipo->saveDocs();
		$tipo->saveCategoria();
		$dados['arquivos'] = $tipo->getArquivos();
		$dados['tipoDoc'] = $tipo->getTipoArquivos();
		$dados['users'] = $users->listUsers();

		$this->loadTemplate('admin', $dados);
	}

	public function remove($id){

		$remove = new Documentos();
		$remove->delDocs($id);
		
		header("Location: /admin");
	}

	public function removeCat($id){

		$remove = new Documentos();
		$remove->delCategoria($id);

		header("Location: /admin");
	}

	public function removeUser($id){

		$remove = new Users();
		$remove->removeUser($id);

		header("Location: /admin");
	}
}