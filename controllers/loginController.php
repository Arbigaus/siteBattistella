<?php
class loginController extends Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$dados = array();

		$login = new Login();
		$dados = $login->getLogin();



		$this->loadTemplate('login', $dados);
	}
}