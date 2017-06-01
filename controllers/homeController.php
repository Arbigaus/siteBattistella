<?php
class homeController extends Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$dados = array();

		$this->loadIndexTemplate('home', $dados);

	}

	public function teste(){
		echo "teste";
	}
}
