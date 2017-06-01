<?php 
class Users extends Model{

	private $name;

	public function editUser(){
		if(isset($_POST['edit_nome_user']) && !empty($_POST['edit_email_user'])){
			$nome = addslashes($_POST['edit_nome_user']);
			$email = addslashes($_POST['edit_email_user']);
			$id = addslashes($_POST['id']);

			if(!empty($_POST['edit_pass_user'])){
				$pass = md5(addslashes($_POST['edit_pass_user']));
				$sql = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$pass' WHERE id = '$id'";
			}else{
				$sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
			}

			
			$this->db->query($sql);

		}
	}

	public function saveUser(){
		if(isset($_POST['nome_user']) && !empty($_POST['email_user'])){
			$nome = addslashes($_POST['nome_user']);
			$email = addslashes($_POST['email_user']);
			$pass = addslashes($_POST['pass_user']);

			$sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$pass'";
			$this->db->query($sql);
		}
	}

	public function listUsers(){
		$array = array();

		$sql = "SELECT * FROM usuarios";
		$sql = $this->db->query($sql);

		if ($sql->rowCount() > 0){
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function removeUser($id){

		if(isset($id)){
			$sql = "DELETE FROM usuarios WHERE id = '$id'";
			$this->db->query($sql);
		}
	}
}