<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 10</title>

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
        <h1>Estruturas Condicionais - If, Else if, Else</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>If</div>
        <div class="panel-body">
          <?php

          echo '<h4><small>// O <code>if/else</code> é um operador condicional utilizado quando desejamos executar um bloco de código apenas se determinada condição for atendida, por exemplo, exibir um conteúdo apenas se o usuário for menor de idade.</small></h4>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo '<code>$qualASuaIdade = 10;</code> <br>';
            echo '<code>$idadeCrianca = 12;</code> <br>';
            echo '<code>$idadeMaior = 18;</code> <br>';

            /////////////////// If //////////////////
            echo "<strong>Sintaxe do If: </strong> <br>";

            echo '<code>if ($qualASuaIdade < $idadeCrianca){</code><br>';

            echo "<code>echo = ". '"Criança";'. "<br>}</code><br>";

            echo '<code>else {</code><br>';

            echo "<code>echo = ". '"Adolecente";'. "<br>}</code><br>";


            echo "Resultado: ";

            $qualASuaIdade = 10;

            $idadeCrianca = 12;
            $idadeMaior = 18;

            if ($qualASuaIdade < $idadeCrianca){

            	echo "Criança";
            } else {

            	echo "Adolecente";
            }

          echo "</div>";

          ?>
        </div>
      </div>
			<!-- END: .panel -->

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>If, Else if e Else</div>
        <div class="panel-body">
          <?php

          echo '<h4><small>// Além do <code>if/else</code>, existe também a condicional <code>elseif</code> ou <code>else if</code>. Essa opção é utilizada caso seja necessário verificar duas ou mais condições.</small></h4>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo '<code>$qualASuaIdade = 27;</code> <br>';
            echo '<code>$idadeCrianca = 12;</code> <br>';
            echo '<code>$idadeMaior = 18;</code> <br>';
            echo '<code>$idadeMelhor = 65;</code> <br><hr>';

            /////////////////// If, Else if, Else //////////////////
            echo "<strong>Sintaxe do If, Else if, Else: </strong> <br>";

            echo '<code>if ($qualASuaIdade < $idadeCrianca) {</code><br>';

            echo "<code>echo = ". '"Criança";'. "<br>}</code><br>";

            echo '<code>else if ($qualASuaIdade < $idadeMaior) {</code><br>';

            echo "<code>echo = ". '"Adolecente";'. "<br>}</code><br>";

            echo '<code>elseif ($qualASuaIdade < $idadeMelhor) {</code><br>';

            echo "<code>echo = ". '"Adulto";'. "<br>}</code><br>";

            echo '<code>else {</code><br>';

            echo "<code>echo = ". '"Idoso";'. "<br>}</code><br>";

            echo "<strong>Resultado:</strong> ";

            $qualASuaIdade = 27;

            $idadeCrianca = 12;
            $idadeMaior = 18;
            $idadeMelhor = 65;

            if ($qualASuaIdade < $idadeCrianca) {

            	echo "Criança";

            } else if ($qualASuaIdade < $idadeMaior) {

            	echo "Adolecente";

            } elseif ($qualASuaIdade < $idadeMelhor) {

            	echo "Adulto";

            } else{

            	echo "Idoso";

            }

          echo "</div>";

          ?>
        </div>
      </div>
			<!-- END: .panel -->

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operador ternário - (If de uma Linha só)</div>
        <div class="panel-body">
          <?php

          echo '<h4><small>// Outra estrutura de condição é o operador ternário, o qual também é chamado de <code>if</code> ternário. Em suma, ele é uma versão compacta do <code>if</code>.</small></h4>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo '<code>$qualASuaIdade = 18;</code> <br>';
            echo '<code>$idadeCrianca = 12;</code> <br>';
            echo '<code>$idadeMaior = 18;</code> <br>';

            /////////////////// If Ternário //////////////////
            echo "<strong>Sintaxe do operador ternário: </strong> <br>";

            echo '<code>echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";</code><br>';


            echo "Resultado: ";

            $qualASuaIdade = 18;

            $idadeCrianca = 12;
            $idadeMaior = 18;

            echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

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