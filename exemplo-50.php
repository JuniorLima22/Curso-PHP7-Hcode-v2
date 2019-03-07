<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - PDO";
  $tituloAula = "PDO: Apagando dados no banco";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>PDO: Apagando dados no banco</div>
    <div class="panel-body">

      <h3>
        <small>// <code>PDO</code>: PHP Data Objects. Esse é um dos assuntos a se interessar muito pois é a forma mais recomendada pra se trabalhar com PHP e Banco de Dados. <code>PDO</code> já existia em outras versões do PHP então porque que agora é um assunto mais importante, porque as funções nativas <code>MySQLi</code>, <code>MySQL_Connect</code> ou <code>MySQL_Query</code> entre outras. Essas funções internas não funcionam mais no PHP ou você usa a <code>CLASSE MySQLi</code> ou <code>PDO</code>.<br>
        </small>
      </h3>

      <!-- Documentação -->
      <!-- <h4>Segue alguns links para consulta:<br></h4>
        <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
        <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
          

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar uma conexão com o Banco de Dados e Apagar dados usando <code>PDO</code>.<br>

        <strong>Sintaxe da <code>$conn = new PDO();</code> </strong><br><br>

        <pre>
          <code class="php">
            //Conexão com qual tipo de Banco de Dados MySQL, SQL Server entre outros
            //é um padrão de conexão chamado DSN (Data Sheet Name)
            //1 - mysql: é o tipo de banco que iremos conectar
            //2 - dbname: o nome do Banco de Dados
            //3 - host: localhost (é o servidor que você vai se conectar)
            //4 - login: de acesso ao servidor
            //5 - senha: de acesso ao servidor
            $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

            $stmt = $conn->prepare("DELETE FROM tb_usuarios_dois WHERE idusuario = :ID");

            $id = 5;

            //bindParam() faz uma conexão com os paramêtros dentro da Query do MySql
            $stmt->bindParam(":ID", $id);

            //Pra executar o comando ao banco de dados
            $stmt->execute();

            echo "Deletado com sucesso!";
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>DELETE FROM</code>:</strong> <br>";

          //Conexão com qual tipo de Banco de Dados MySQL, SQL Server entre outros
          //é um padrão de conexão chamado DSN (Data Sheet Name)
          //1 - mysql: é o tipo de banco que iremos conectar
          //2 - dbname: o nome do Banco de Dados
          //3 - host: localhost (é o servidor que você vai se conectar)
          //4 - login: de acesso ao servidor
          //5 - senha: de acesso ao servidor
          $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

          $stmt = $conn->prepare("DELETE FROM tb_usuarios_dois WHERE idusuario = :ID");

          $id = 5;

          //bindParam() faz uma conexão com os paramêtros dentro da Query do MySql
          $stmt->bindParam(":ID", $id);

          //Pra executar o comando ao banco de dados
          $stmt->execute();

          echo "Deletado com sucesso!";

          echo "<br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->