<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 52</title>

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
        <h1>PDO - DAO - Data Access Object</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>DAO - Data Access Object</div>
        <div class="panel-body">

          <h3>
            <small>// <code>DAO</code>: O DAO é o intermediário com o banco de dados, ele faz conexão e transações com este. Quem trata a regra de negócio é o model. Mas são conceitos que causam um pouco de confusão mesmo para quem não tem costume com design patterns mesmo..<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue alguns links para consulta:<br></h4>
            <h4><small>DAO:<code> <a href="https://pt.stackoverflow.com/questions/113840/como-funciona-o-padr%C3%A3o-dao" target="_blank">https://pt.stackoverflow.com/questions/113840/como-funciona-o-padr%C3%A3o-dao</a></code></small></h4>
            <!-- <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
              

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar uma conexão com o Banco de Dados com <code>PDO</code> usando <code>DAO</code>.<br>

            <strong>Sintaxe da <code>$conn = new PDO();</code> </strong><br><br>

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

            <pre><strong>Classe Sql.php</strong>
              <code class="php">
                //Essa Classe Extende da Classe PDO que já é nativa do PHP
                //Então tudo o que o PDO faz a Classe Sql também sabe fazer
                class Sql extends PDO {   
                  //** Inserir no Banco de Dados **//
                  private $conn;

                  //Ao fazer uma Instancia de Sql ela se conectara automaticamente no Banco de dados
                  public function __construct(){
                    $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                  }//End: public function __construction()

                  private function setParams($statement, $parameters = array()){
                    //Associar os Parametros aos Comandos
                    foreach ($parameters as $key => $value) {
                      $this->setParam($statement, $key, $value);
                    }

                  }//End: private function setParams

                  private function setParam($statement, $key, $value){
                    $statement->bindParam($key, $value);
                  }//End: private function setParam

                  //Executa os comandos
                  public function query($rawQuery, $params = array()){

                    $stmt = $this->conn->prepare($rawQuery);

                    $this->setParams($stmt, $params);

                    //Executar no Banco de dados
                    $stmt->execute();
                    return $stmt;

                  }//End: public function query()


                  //** Exibir do Banco de Dados **//

                  public function select($rawQuery, $params = array()):array{

                    $stmt = $this->query($rawQuery, $params);

                    return $stmt->fetchAll(PDO::FETCH_ASSOC);
                  }//End: public function select
                }//End: class Sql extends PDO
              </code>
            </pre>

            <pre><strong>index.php</strong>
              <code class="php">
                require_once("assets/dao/config.php");

                $sql = new Sql();

                $usuarios = $sql->select("SELECT * FROM tb_usuarios_dois");

                echo json_encode($usuarios);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>SELECT * FROM</code>:</strong> <br>";

              require_once("assets/dao/config.php");

              $sql = new Sql();

              $usuarios = $sql->select("SELECT * FROM tb_usuarios_dois");

              echo json_encode($usuarios);

              echo "<br>";
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

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>