<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 11</title>

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
        <h1>Estruturas Condicionais - Swicth Case</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Swicth Case</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// O <code>switch/case</code> é uma estrutura condicional que está presente em várias linguagens de programação. Ela recebe um valor como parâmetro e verifica se ele atende alguma das condições especificadas. Em caso positivo o trecho de código relacionado a essa condição é executado.</small></h3>';

          echo '<h3><small>// Diferente da estrutura <code>if/else</code>, o <code>switch/case</code> avalia apenas condições de igualdade. Ou seja, ela verifica se o valor recebido como parâmetro é igual a alguma das opções especificadas em seu corpo. Esse comportamento equivale à utilização de vários <code>if/else</code> em sequência, porém com uma sintaxe mais enxuta e de fácil leitura.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo '<code>$diaDaSemanda = date("w");</code> <br>';

            /////////////////// Swicth Case //////////////////
            echo "<strong>Sintaxe do Swicth Case: </strong> <br>";

            echo '<code>switch ($diaDaSemanda) {</code><br>';

            echo '<code>case 0:</code><br>';

            echo "<code>echo = ". '"Domingo";'. "<br>}</code><br>";

            echo '<code>case 1:</code><br>';

            echo "<code>echo = ". '"Segunda-Feira";'. "<br>}</code><br>";

            echo '<code>case 2:</code><br>';

            echo "<code>echo = ". '"Terça-Feira";'. "<br>}</code><br>";

            echo '<code>case 3:</code><br>';

            echo "<code>echo = ". '"Quarta-Feira";'. "<br>}</code><br>";

            echo '<code>case 4:</code><br>';

            echo "<code>echo = ". '"Quinta-Feira";'. "<br>}</code><br>";

            echo '<code>case 5:</code><br>';

            echo "<code>echo = ". '"Sexta-Feira";'. "<br>}</code><br>";

            echo '<code>case 6:</code><br>';

            echo "<code>echo = ". '"Sábado";'. "<br>}</code><br>";

            echo '<code>default:</code><br>';

            echo "<code>echo = ". '"Data inválida";'. "<br>}</code><br>";


            echo "<strong>Resultado:</strong> ";

            $diaDaSemanda = date("w");

            switch ($diaDaSemanda) {

            	case 0:
            		echo "Domingo";
            		break;

            	case 1:
            		echo "Segunda-Feira";
            		break;

            	case 2:
            		echo "Terça-Feira";
            		break;

            	case 3:
            		echo "Quarta-Feira";
            		break;

            	case 4:
            		echo "Quinta-Feira";
            		break;

            	case 5:
            		echo "Sexta-Feira";
            		break;

            	case 6:
            		echo "Sábado";
            		break;

            	default:
            		echo "Data inválida";
            		break;
            }

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