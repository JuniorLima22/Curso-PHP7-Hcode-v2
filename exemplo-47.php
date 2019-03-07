<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - PDO";
  $tituloAula = "Conectando o PHP 7 com SQL Server usando PDO";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Conectando o PHP 7 com SQL Server usando PDO</div>
    <div class="panel-body">

      <h3>
        <small>// <code>PDO</code>: PHP Data Objects. Esse é um dos assuntos a se interessar muito pois é a forma mais recomendada pra se trabalhar com PHP e Banco de Dados. <code>PDO</code> já existia em outras versões do PHP então porque que agora é um assunto mais importante, porque as funções nativas <code>MySQLi</code>, <code>MySQL_Connect</code> ou <code>MySQL_Query</code> entre outras. Essas funções internas não funcionam mais no PHP ou você usa a <code>CLASSE MySQLi</code> ou <code>PDO</code>.<br>
        </small>
      </h3>

      <h3>
        <small>// <code>PDO</code>: Esse é o grande barato de usar <code>PDO</code> porque posso fazer toda minha programação usando as funções do <code>PDO</code> e ela serve pra qualquer Banco de Dados, basta só mudar a string de conexão.<br>
        </small>
      </h3>

      <!-- Documentação -->
      <!-- <h4>Segue alguns links para consulta:<br></h4>
        <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
        <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
          

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar uma conexão com o Banco de Dados usando <code>PDO</code>.<br>

        <strong>Sintaxe da <code>$conn = new PDO();</code> </strong><br><br>

        <pre>
          <code class="php">
            //Conexão com qual tipo de Banco de Dados MySQL, SQL Server entre outros
            //é um padrão de conexão chamado DSN (Data Sheet Name)
            //1 - sqlsrv: é o tipo de banco que iremos conectar
            //2 - Database: o nome do Banco de Dados
            //3 - server: localhost (é o servidor que você vai se conectar) e acrecentar o nome da  
            //Instancia conforme a instalação (\SQLEXPRESS;ConnectionPooling=0)
            //Connection Pooling: Tem tudo haver com você manter o estado da conexão
            //4 - login: de acesso ao servidor (sa)
            //5 - senha: de acesso ao servidor ("")

            $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");

            echo "Conectado com sucesso! Se não conectar ao Banco de Dados apresentara um Error";
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>PDO()</code>:</strong> <br>";

          //Conexão com qual tipo de Banco de Dados MySQL, SQL Server entre outros
          //é um padrão de conexão chamado DSN (Data Sheet Name)
          //1 - sqlsrv: é o tipo de banco que iremos conectar
          //2 - Database: o nome do Banco de Dados
          //3 - server: localhost (é o servidor que você vai se conectar) e acrecentar o nome da Instancia conforme a instalação (\SQLEXPRESS;ConnectionPooling=0)
          //4 - login: de acesso ao servidor (sa)
          //5 - senha: de acesso ao servidor ("")
          // $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");

          echo "Conectado com sucesso! Se não conectar ao Banco de Dados apresentara um Error";

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->