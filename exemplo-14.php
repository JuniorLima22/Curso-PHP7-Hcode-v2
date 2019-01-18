<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 14</title>

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
        <h1>Laços de repetição - While | Do While</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>While</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// A diferencia básica do <code>While</code> e <code>Do While</code>, é que o <code>Do While</code> executa pelo menos uma vez.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Enquanto a <code>$condicao = true</code>, <code>While</code> vai continuar repetindo o codigo.<br>';

            /////////////////// While //////////////////
            echo "<strong>Sintaxe do While: </strong> <br>";

            echo '<code>$condicao = true;</code><br><br>';

            echo '<code>while ($condicao) {</code><br>';

            echo '<code>$numero = rand(1, 10);</code><br><br>';

            echo '<code>if ($numero === 3){</code><br>';
            echo '<code>echo " TRÊS_";</code><br>';
            echo '<code>$condicao = false;<br>}</code><br>';

            echo '<code>echo $numero. " | ";<br>}</code><br>';

            echo "<strong>Resultado do Número Sorteado:</strong><br>";

            $condicao = true;

            while ($condicao) {

              $numero = rand(1, 10);

              if ($numero === 3) {
                echo " TRÊS_";
                $condicao = false;
              }

              echo $numero. " | ";
            }

          echo "</div>";

          ?>
        </div>
      </div>
			<!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Do While</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Qualquer compra acima de 100,00 com 10% de desconto.<br>';

            /////////////////// Do While //////////////////
            echo "<strong>Sintaxe do Do While: </strong> <br>";

            echo '<code>$total = 150;</code><br>';
            echo '<code>$desconto = 0.9;</code><br><br>';

            echo '<code>do {</code><br>';

            echo '<code>$total *= $desconto;<br>}</code> ';

            echo '<code>while ($total > 100);</code><br>';

            echo "<strong>Resultado:</strong><br>";

            $total = 150;
            $desconto = 0.9;

            do {
              $total *= $desconto;
            } while ($total > 100);

            echo $total;

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