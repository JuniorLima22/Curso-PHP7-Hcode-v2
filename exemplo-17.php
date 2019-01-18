<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 17</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
      <!-- BEGIN: barra de navegaçao-->
      <nav class="navbar navbar-default">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
              <span class="sr-only">Alternar Menu</span><!-- Somente para leitores de Tela -->
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Curso Udemy PHP 7 - <code>Hcode</code></a>
          </div>

          <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="">Variáveis</a></li>
              <li><a href="">Classes</a></li>
              <li><a href="">POO</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Jr Lima <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="">Perfil</a></li>
                  <li><a href="">Logout</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div><!-- /container -->
      </nav>
      <!-- END: barra de navegaçao-->

    <div class="container">
      
      <div class="page-header">
        <h1>Constantes e Arrays Constantes</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Variavel Constantes</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>Constante</code> é ultilizado por principio não prescisa mudar o valor. Por Exemplo o idioma da Página.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Definir uma Variavel Constante <code>SERVIDOR</code>.<br>';

            /////////////////// Constante //////////////////
            echo "<strong>Sintaxe da Constante: </strong> <br><br>";

            echo '<code>define("SERVIDOR", "127.0.0.1");</code><br>';
            echo '<code>echo SERVIDOR;</code><br><br>';

            echo "<strong>Resultado:</strong> ";

            define("SERVIDOR", "127.0.0.1");

            echo SERVIDOR;

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Constantes</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Definir uma Array Constante <code>BANCO_DE_DADOS</code>.<br>';

            /////////////////// Array Constante //////////////////
            echo "<strong>Sintaxe da Array Constante: </strong> <br><br>";

            echo '<code>define("BANCO_DE_DADOS", [</code><br>';
            echo "<code>'127.0.0.1',</code><br>";
            echo "<code>'root',</code><br>";
            echo "<code>'password',</code><br>";
            echo "<code>'test'</code><br>";
            echo "<code>]);</code><br><br>";

            echo "<strong>Resultado:</strong> ";

            define("BANCO_DE_DADOS", [
              '127.0.0.1',
              'root',
              'password',
              'test'
            ]);

            print_r(BANCO_DE_DADOS);

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Constantes Padrão do PHP</div>
        <div class="panel-body">
          <?php

          // Documentação
          echo '<h4>Documentação:<small><code> <a href="https://secure.php.net/manual/pt_BR/reserved.constants.php" target="_blank">https://secure.php.net/manual/pt_BR/reserved.constants.php</a> </code></small></h4>';
          
          echo "<div class='well well-sm'>";

            /////////////////// Constantes Padrão do PHP //////////////////
            echo "<strong>Sintaxe de Constantes Padrão do PHP: </strong> <br><br>";

            echo "<strong>Exemplo 1:</strong><br>";
            echo '<code>echo PHP_VERSION;</code> = ';
            echo PHP_VERSION;

            echo "<br>";

            echo "<strong>Exemplo 2:</strong><br>";
            echo '<code>echo DIRECTORY_SEPARATOR;</code> = ';
            echo DIRECTORY_SEPARATOR;

            echo "<br>";

          echo "</div>";

          ?>
        </div>
      </div>
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
  </body>
</html>