<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - PDO";
  $tituloAula = "PDO: Usando transações";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>PDO: Usando transações</div>
    <div class="panel-body">

      <h3>
        <small>// <code>Transação</code>: Transação é um processo que ou tudo da certo e eu confirmo isso com o comando <code>commit</code> ou se der alguma coisa errado volto o processo utilizando o <code>rollback</code> para cancelar, é como se fosse o <code>Ctrl+Z</code>.<br>
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

            //beginTransaction inicia uma Transação.
            //A transação está amarrada a conexão $conn e não ao $stmt por isso é colocado antes da query
            $conn->beginTransaction();

            $stmt = $conn->prepare("DELETE FROM tb_usuarios_dois WHERE idusuario = ?");

            $id = 3;

            //Pra executar o comando ao banco de dados
            $stmt->execute(array($id));

            echo "Deletado com sucesso!";

            //Ao abrir uma transação você precisa: Confirmar (commit) ou Cancelar (rollback)
            $conn->rollback();

            echo "Porem rollback() cancelou o DELETE";

            // $conn->commit();

            // echo "Confirmado o DELETE com o commit()";
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

          //beginTransaction inicia uma Transação.
          //A transação está amarrada a conexão $conn e não ao $stmt por isso é colocado antes da query
          $conn->beginTransaction();

          $stmt = $conn->prepare("DELETE FROM tb_usuarios_dois WHERE idusuario = ?");

          $id = 3;

          //Pra executar o comando ao banco de dados
          $stmt->execute(array($id));

          echo "Deletado com sucesso!";

          echo "<br>";

          //Ao abrir uma transação você precisa: Confirmar (commit) ou Cancelar (rollback)
          $conn->rollback();

          echo "Porem rollback() cancelou o DELETE";

          // $conn->commit();

          // echo "Confirmado o DELETE com o commit()";

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->