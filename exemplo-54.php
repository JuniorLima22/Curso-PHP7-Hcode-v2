<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - Data Access Object e PDO";
  $tituloAula = "PDO - DAO - LIST";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>LISTAR TODOS OS DADOS DA TABELA</div>
    <div class="panel-body">              

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar uma conexão com o Banco de Dados com <code>PDO</code> usando <code>DAO</code> e Listar todos os Usuários da Tabela.<br>

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
                $row = $results[0];

                $this->setIdusuario($row['idusuario']);
                $this->setDeslogin($row['deslogin']);
                $this->setDessenha($row['dessenha']);
                $this->setDtcadastro(new DateTime($row['dtcadastro']));
              }else{
                throw new Exception("Login e/ou senha inválidos.");
              }
            }//End: login

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
        <pre><strong>Listar todos os Usuários da Tabela</strong>
          <code class="php">
            require_once("assets/dao/config.php");

            //Carrega lista de todos usuários da tabela
            //Observe que devido o Método ser Static não precisa instacialo, posso chamar direto
            $lista = Usuario::getList();

            echo json_encode($lista); 
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>Listar todos os Usuários da Tabela</code>:</strong> <br>";

          require_once("assets/dao/config.php");

          //Carrega lista de todos usuários da tabela
          //Observe que devido o Método ser Static não precisa instacialo, posso chamar direto
          $lista = Usuario::getList();

          echo json_encode($lista); 

          echo "<br><br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>LISTAR BUSCA DE USUÁRIOS NA TABELA</div>
    <div class="panel-body">              

      <div class='well well-sm'>
        <pre><strong>Listar busca de usuários na Tabela que contenha CHR</strong>
          <code class="php">
            require_once("assets/dao/config.php");

            //Carrega uma lista de usuários buscando pelo login
            $search = Usuario::search("chr");

            echo json_encode($search); 
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>Listar busca de usuários na Tabela que contenha CHR</code>:</strong><br>";

          //Carrega uma lista de usuários buscando pelo login
          $search = Usuario::search("chr");

          echo json_encode($search);

          echo "<br><br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>LISTAR USUÁRIOS AUTENTICADOS NA TABELA</div>
    <div class="panel-body">              

      <div class='well well-sm'>

        <pre><strong>Listar usuários na Tabela que esteja autenticado Login=Lima e Senha=qwerty</strong>
          <code class="php">
            require_once("assets/dao/config.php");

            //Obter dados do usuário Autenticado, tem que passar os dois parametros Login e Senha
            $usuario = new Usuario();
            $usuario->login("lima", "qwerty");
            echo $usuario;
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>Listar usuários na Tabela que esteja autenticado Login=Lima e Senha=qwerty</code>:</strong><br>";

          //Obter dados do usuário Autenticado, tem que passar os dois parametros Login e Senha
          $usuario = new Usuario();
          $usuario->login("lima", "qwerty");
          echo $usuario;

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->