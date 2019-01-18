<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 56</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="assets/highlight/styles/monokai-sublime.css">
    <script src="assets/highlight/highlight.pack.js"></script>
  </head>
  <body>

    <?php 
      require_once ("menu.php");
    ?>

    <div class="container">
      
      <div class="page-header">
        <h1>PDO - DAO - UPDATE</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>EDITAR DADOS DA TABELA</div>
        <div class="panel-body">              

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar uma conexão com o Banco de Dados com <code>PDO</code> usando <code>DAO</code> e Editar Usuários da Tabela.<br>

            <strong>Sintaxe da <code>class Usuario {};</code> </strong><br><br>

            <pre><strong>config.php</strong>
              <code class="php">
                // OBS: spl_autoload_register(); Passando Função Anônima
                spl_autoload_register(function($class_name){
                  $filename = $class_name.".php";

                  //Inclui a Classe Sql da pasta (assets/dao/class/Sql.php)
                  if (file_exists("assets/dao/class". DIRECTORY_SEPARATOR .$filename) === true) {
                    require_once("assets/dao/class". DIRECTORY_SEPARATOR .$filename);
                  }
                });
              </code>
            </pre>

            <pre><strong>Classe Usuario.php</strong>
              <code class="php">
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
              </code>
            </pre>
          </div> <!-- End: .well well-sm -->

          <div class='well well-sm'>
            <pre><strong>Editar Usuários da Tabela</strong>
              <code class="php">
                require_once("assets/dao/config.php");

                //Editar Usuário na Tabela de Dados
                $usuario = new Usuario();

                $usuario->loadById(18);

                $usuario->update("professor", "testesenha");

                echo $usuario;
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Editar Usuários da Tabela</code>:</strong> <br>";

              require_once("assets/dao/config.php");

              //Editar Usuário na Tabela de Dados
              $usuario = new Usuario();

              $usuario->loadById(18);

              $usuario->update("professor", "testesenha");

              echo $usuario;
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- END: Exemplos -->

			<hr>

			<div class="col-sm-6">
	      <a href="index.php"><button class="btn btn-primary">Voltar</button></a>
	    </div>
    </div> <!-- End: .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>