<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - Data Access Object e PDO";
  $tituloAula = "PDO - DAO (Data Access Object)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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