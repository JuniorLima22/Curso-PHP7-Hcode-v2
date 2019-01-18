<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 46</title>

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
        <h1>Instalando o SQL Server Express</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Criando uma Tabela no Banco de Dados</div>
        <div class="panel-body">

          <h3>
            <small>// <code>SQL Server Express</code>: Muitas vezes quando você aprende a programar em PHP é usado o Banco de Dados <code>MySQL</code> que é o Banco de dados Gratuito mais popular do mundo. Mais o <code>SQL Server</code> é o Banco de Dados mais utilizado no ambiente Corporativo. Embora o <code>SQL Server</code> possa ser usado na Web também isso só é mais comum quando a empresa já o utiliza internamente.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue links para Download do <code>SQL Server Express</code>:<br></h4>
            <h4><small>SQL Server Express:<code> <a href="https://www.microsoft.com/pt-br/sql-server/sql-server-downloads" target="_blank">https://www.microsoft.com/pt-br/sql-server/sql-server-downloads</a></code></small><br>

            <small>SQL Server Express no Windos 7:<code> <a href="https://www.microsoft.com/pt-br/download/details.aspx?id=42299" target="_blank">https://www.microsoft.com/pt-br/download/details.aspx?id=42299</a></code></small><br>

            <small>SQL Server Management Studio (SSMS):<code> <a href="https://docs.microsoft.com/pt-br/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-2017" target="_blank">https://docs.microsoft.com/pt-br/sql/ssms/download-sql-server-management-studio-ssms?view=sql-server-2017</a></code></small><br>

            <small>DBA - Administrador de Banco de Dados:<code> <a href="http://saiadolugar.com.br/dba/" target="_blank">http://saiadolugar.com.br/dba/</a></code></small><br>
          </h4><br>

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar uma Tabela no Banco de Dados com o nome <code>tb_usuarios</code>.<br>

            <strong>Sintaxe da <code>CREATE TABLE tb_usuarios();</code> </strong><br><br>

            <pre>
              <code class="php">
                CREATE TABLE tb_usuarios(
                  idusuario INT NOT NULL IDENTITY PRIMARY KEY,
                  deslogin VARCHAR(64) NOT NULL,
                  dessenha VARCHAR(254) NOT NULL,
                  dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
                );
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>CREATE TABLE tb_usuarios();</code>:</strong> <br>";

              echo "Será criado uma nova tabela de dados no Banco de Dados";

              echo "<br>";
              ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Inserindo e Exibindo dados na Tabela</div>
        <div class="panel-body">           

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            INSERIR dados da Tabela.<br>

            <strong>Sintaxe da <code>INSERT INTO tb_usuarios;</code> </strong><br><br>

            <pre>
              <code class="php">
                INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('root', 'senhateste');

                SELECT * FROM tb_usuarios;
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>INSERT INTO tb_usuarios ();</code>:</strong> <br>";

              echo "Será Inserido um novo cadastro na tabela de dados"; 

              echo "<br>";              

              echo "<strong>Resultado <code>SELECT * FROM tb_usuarios;</code>:</strong> <br>";                     

              echo "Será Exibido o cadastro da tabela de dados"; 

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