<?php 
class Documentos extends Model{

	public function setArquivos($nome, $url, $data, $tipo){

		$sql = "INSERT INTO arquivos SET nome = '$nome', url = '$url', data = '$data', id_tipo_doc = '$tipo'";
		$this->db->query($sql);

	}

	public function getArquivos(){
		$array = array();

		$sql = "SELECT * FROM arquivos";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function getArquivosByTipo($tipo){
		$array = array();

		$sql = "SELECT * FROM arquivos WHERE id_tipo_doc = '$tipo'";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;

	}

	public function getTipoArquivos(){
		$array = array();

		$sql = "SELECT * FROM tipo_doc";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getCatArquivos(){
		$array = array();

		$sql = "SELECT tipo_doc.nome, tipo_doc.id FROM arquivos LEFT JOIN tipo_doc ON tipo_doc.id = arquivos.id_tipo_doc GROUP BY nome";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function saveCategoria(){
		if(isset($_POST['doc_cat'])){
			$nome = addslashes($_POST['doc_cat']);

			$sql = "INSERT INTO tipo_doc SET nome = '$nome'";
			$this->db->query($sql);
		}
	}

	public function delCategoria($id){
		if(isset($id)){
			$sql = "DELETE FROM tipo_doc WHERE id = '$id'";
			$this->db->query($sql);
		}
	}

	public function saveDocs(){

		if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {

			$permitidos = array('application/pdf');

			if(in_array($_FILES['arquivo']['type'], $permitidos)){
				$ext=explode('application/', $_FILES['arquivo']['type']);
				array_shift($ext);

				$url = md5(time().rand(0,999)).".pdf";

				move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/documentos/'.$url);

				$nome = addslashes($_POST['doc_nome']);
				$assunto = addslashes($_POST['assunto']);
				$data = addslashes($_POST['data']);
				$idDoc = addslashes($_POST['tipo_doc']);

				$sql = "INSERT INTO arquivos SET nome = '$nome', url = '$url', assunto = '$assunto', data = '$data', id_tipo_doc = '$idDoc'";
				$this->db->query($sql);
			}
		}
	}

	public function delDocs($id){

		if(isset($id)){
			$sql = "DELETE FROM arquivos WHERE id = '$id'";
			$this->db->query($sql);
		}
	}
}
