<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 43</title>

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
        <h1>Acessando o Banco de Dados com Workbench</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Criando uma Tabela no Banco de Dados</div>
        <div class="panel-body">

          <h3>
            <small>// <code>Workbench</code>: A Oracle tem essa ferramenta de Interface muito importante que é o <code>MySql Workbench</code>.<br>
            </small>
          </h3>

          <h3>
            <small>// <code>OBS</code>: Assistir as Aulas.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <!-- <h4>Segue alguns links para consulta:<br></h4>
            <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
            <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
              

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar uma Tabela no Banco de Dados com o nome <code>tb_usuarios</code>.<br>

            <strong>Sintaxe da <code>CREATE TABLE tb_usuarios();</code> </strong><br><br>

            <pre>
              <code class="MySql">
                CREATE TABLE tb_usuarios(
                  idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  deslogin VARCHAR(64) NOT NULL,
                  dessenha VARCHAR(254) NOT NULL,
                  dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
                );
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>CREATE TABLE tb_usuarios();</code>:</strong> <br>";

              echo "Será criado uma nova tabela de dados";              

              echo "<br>";
              ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Inserindo dados na Tabela</div>
        <div class="panel-body">           

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Inserir novo Usuário.<br>

            <strong>Sintaxe da <code>INSERT INTO tb_usuarios ();</code> </strong><br><br>

            <pre>
              <code class="MySql">
                INSERT INTO tb_usuarios (deslogin, dessenha) VALUE('root', 'senhateste');

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

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Editando dados na Tabela</div>
        <div class="panel-body">           

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Editar dados do Usuário.<br>

            <strong>Sintaxe da <code>UPDATE tb_usuarios;</code> </strong><br><br>

            <pre>
              <code class="MySql">
                UPDATE tb_usuarios SET dessenha = '123456' WHERE idusuario = 1;
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>UPDATE tb_usuarios;</code>:</strong> <br>";

              echo "Será Editado o cadastro na tabela de dados";

              echo "<br>";
              ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Deletar dados na Tabela</div>
        <div class="panel-body">           

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Deletar dados da Tabela.<br>

            <strong>Sintaxe da <code>DELETE FROM tb_usuarios;</code> </strong><br><br>

            <pre>
              <code class="MySql">
                DELETE FROM tb_usuarios WHERE idusuario = 1;
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>DELETE FROM tb_usuarios;</code>:</strong> <br>";

              echo "Será Excluido o cadastro na tabela de dados";

              echo "<br>";
              ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Resetando a Tabela</div>
        <div class="panel-body">           

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Formatar a Tabela.<br>

            <strong>Sintaxe da <code>TRUNCATE TABLE tb_usuarios;</code> </strong><br><br>

            <pre>
              <code class="MySql">
                TRUNCATE TABLE tb_usuarios;
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>TRUNCATE TABLE tb_usuarios;</code>:</strong> <br>";

              echo "Será Formatado (Apagado todos os registros) da tabela de dados";

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