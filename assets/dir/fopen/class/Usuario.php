<?php 
	class Usuario {
		private $idusuario;
		private $deslogin;
		private $dessenha;
		private $dtcadastro;

		public function getIdusuario(){
			return $this->idusuario;
		}

		public function setIdusuario($value){
			$this->idusuario = $value;
		}

		public function getDeslogin(){
			return $this->deslogin;
		}

		public function setDeslogin($value){
			$this->deslogin = $value;
		}

		public function getDessenha(){
			return $this->dessenha;
		}

		public function setDessenha($value){
			$this->dessenha = $value;
		}

		public function getDtcadastro(){
			return $this->dtcadastro;
		}

		public function setDtcadastro($value){
			$this->dtcadastro = $value;
		}

		//Lista Usuário correspodente ao seu ID especificado
		public function loadById($id){
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios_dois WHERE idusuario = :ID", array(
				":ID"=>$id
			));

			//Validar os registros: count ou isset
			// if (isset($results[0])){};

			if (count($results) > 0){

				$this->setData($results[0]);
			}
		}//End: loadById

		//Listar todos os Usuários da Tabela
		public static function getList(){
			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_usuarios_dois ORDER BY idusuario;");
		}//End: getList

		//Faz uma busca de Usuario
		public static function search($login){
			$sql = new Sql();

			return $sql->select("SELECT * FROM tb_usuarios_dois WHERE deslogin LIKE :SEARCH ORDER BY idusuario", array(
				':SEARCH'=>"%".$login."%"
			));
		}//End: search

		//Obter dados do usuário Autenticado, tem que passar os dois parametros Login e Senha
		public function login($login, $password){
			$sql = new Sql();

			$results = $sql->select("SELECT * FROM tb_usuarios_dois WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
				":LOGIN"=>$login,
				":PASSWORD"=>$password
			));

			//Validar os registros: count ou isset
			// if (isset($results[0])){};

			if (count($results) > 0){
				
				$this->setData($results[0]);
				
			}else{
				throw new Exception("Login e/ou senha inválidos.");
			}
		}//End: login

		public function setData($data){
			$this->setIdusuario($data['idusuario']);
			$this->setDeslogin($data['deslogin']);
			$this->setDessenha($data['dessenha']);
			$this->setDtcadastro(new DateTime($data['dtcadastro']));
		}//End: setData

		////////////////////////////////////////////
		//Incluir um novo Usuário na Tabela de Dados
		////////////////////////////////////////////
		public function insert(){
			$sql = new Sql();

			//Utilizando SELECT quando a procedure executar por ultimo ela vai chamar uma função no banco de dados
			//e nos retorna o ID gerado na tabela
			$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getDessenha()
			));

			if (count($results) > 0) {
				$this->setData($results[0]);
			}
		}//End: Insert

		////////////////////////////////////////////
		//Editar um Usuário na Tabela de Dados
		////////////////////////////////////////////
		public function update($login, $password){
			//Defindo as variaveis dentro do objeto
			$this->setDeslogin($login);
			$this->setDessenha($password);

			$sql = new Sql();

			$sql->query("UPDATE tb_usuarios_dois SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
				':LOGIN'=>$this->getDeslogin(),
				':PASSWORD'=>$this->getDessenha(),
				':ID'=>$this->getIdusuario()
			));
		}//End: update

		////////////////////////////////////////////
		//Deletar um Usuário na Tabela de Dados
		////////////////////////////////////////////
		public function delete(){
			$sql = new Sql();

			$sql->query("DELETE FROM tb_usuarios_dois WHERE idusuario = :ID", array(
				':ID'=>$this->getIdusuario()
			));

			//Depois de apagado os dados da tabela podem ser zerado, 
			//pois os dados aindam estão na memoria do objeto 
			$this->setIdusuario(0);
			$this->setDeslogin("");
			$this->setDessenha("");
			$this->setDtcadastro(new DateTime());
		}//End: delete

		//Colocando = "", eles são alimentados automaticamente não sendo necessario
		//colocar o login e senha no objeto $aluno = new Usuario(); no index.php
		public function __construct($login = "", $password = ""){
			$this->setDeslogin($login);
			$this->setDessenha($password);
		}//End: __construct

		public function __toString(){
			return json_encode(array(
				"idusuario"=>$this->getIdusuario(),
				"deslogin"=>$this->getDeslogin(),
				"dessenha"=>$this->getDessenha(),
				"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
		}

	}//End: class Usuario
?>