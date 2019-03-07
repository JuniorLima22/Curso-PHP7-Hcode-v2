<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - Data Access Object e PDO";
  $tituloAula = "PDO - DAO - SELECT";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>PDO - DAO - SELECT</div>
    <div class="panel-body">

      <!-- <h3>
        <small>// <code>Transação</code>: Transação é um processo que ou tudo da certo e eu confirmo isso com o comando <code>commit</code> ou se der alguma coisa errado volto o processo utilizando o <code>rollback</code> para cancelar, é como se fosse o <code>Ctrl+Z</code>.<br>
        </small>
      </h3> -->

      <!-- Documentação -->
      <!-- <h4>Segue alguns links para consulta:<br></h4>
        <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
        <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
          

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar uma conexão com o Banco de Dados com <code>PDO</code> usando <code>DAO</code> e Listar Usuário correspodente ao seu ID especificado.<br>

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
                $row = $results[0];

                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtcadastro(new DateTime($row['dtcadastro']));
              }
            }//End: loadById

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

        <pre><strong>index.php</strong>
          <code class="php">
            require_once("assets/dao/config.php");

            $root = new Usuario();

            //ID do usuário
            $root->loadById(4);

            echo $root; 
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>SELECT * FROM</code>:</strong> <br>";

          require_once("assets/dao/config.php");

          $root = new Usuario();

          //ID do usuário
          $root->loadById(4);

          echo $root;              

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->