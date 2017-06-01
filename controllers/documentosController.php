<?php
class documentosController extends Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$dados = array();

		$doc = new Documentos();
		$dados['arquivos'] = $doc->getArquivos();
		$dados['tipoArquivo'] = $doc->getTipoArquivos();
		$dados['catArquivos'] = $doc->getCatArquivos();		

		$this->loadTemplate('documentos', $dados);

	}
}
