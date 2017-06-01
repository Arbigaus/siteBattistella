<?php
class Login extends Model{

	public function getLogin(){
		$array = array();

		if(isset($_POST['email']) && !empty($_POST['email'])){

			$email = addslashes($_POST['email']);
			$passwd = md5(addslashes($_POST['senha']));

			$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$passwd'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0){
				$array = $sql->fetch();
				
				$_SESSION['id'] = $array['id'];	

				$array['mensagem'] = '';

				return $array;

				header("Location: /admin");
			}else{
				$array['mensagem'] = "Usuário ou senha incorreta";
			}
			
		}
		
		return $array;
	}

}
