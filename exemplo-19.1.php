<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 19.1</title>

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

    <?php 
      require_once ("menu.php");
    ?>

    <div class="container">
      
      <div class="page-header">
        <h1>ID Sessões</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Forçar a criar uma nova Sessões via Programação</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// Toda vez que atualizar a página irá criar um novo <code>ID Session</code>.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Criar nova ID  <code>". '$_SESSION'. "</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

            echo '<code>session_start();</code><br>';
            echo '<code>$_SESSION["nome"] = "Júnior Lima";</code><br>';

            echo '<code>session_regenerate_id();</code><br><br>';

            echo "<strong>Resultado:</strong> ";
            echo '<code>echo $_SESSION['."'nome'".'];</code> = ';

            // session_start();

            $_SESSION["nome"] = "Júnior Lima";

            echo $_SESSION['nome'];

            echo "<br>";

            echo "<strong>ID da Sessão:</strong> ";
            echo '<code>echo session_id();</code> = ';

            session_regenerate_id();

            echo session_id();

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Sessão</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Criar um <code>Array</code> da  <code>". '$_SESSION'. "</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

            echo '<code>session_start();</code><br>';
            echo '<code>$_SESSION["nome"] = "Júnior Lima";</code><br>';

            echo '<code>session_regenerate_id();</code><br><br>';

            echo "<strong>Resultado:</strong> ";
            echo '<code>echo $_SESSION['."'nome'".'];</code> = ';

            // session_start();

            $_SESSION["nome"] = "Júnior Lima";

            echo $_SESSION['nome'];

            echo "<br>";

            echo "<strong>ID da Sessão:</strong> ";
            echo '<code>echo session_id();</code> = ';

            // session_regenerate_id();

            echo session_id();

            echo "<br>";

            echo "<strong>Array da Sessão:</strong> ";
            echo '<code>var_dump($_SESSION);</code> = ';

            var_dump($_SESSION);

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