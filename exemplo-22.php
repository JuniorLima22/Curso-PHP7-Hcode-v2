<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 22</title>

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
        <h1>Parâmetros de Funções</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros de Funções</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir <code>function</code> com Parâmetros.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function ola($texto){</code><br>';
            echo '<code>return "Olá $texto!";<br>}</code><br>';
            echo '<code>echo ola("mundo");</code><br>';
            echo '<code>echo ola("Michael Christian");</code><br>';
            echo '<code>echo ola("Júnior Lima");</code><br><br>';

            echo "<strong>Resultado:</strong> <br>";

            function ola($texto){
              return "Olá $texto! <br>";
            }

            echo ola("mundo");
            echo ola("Michael Christian");
            echo ola("Júnior Lima");

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Definir um valor padrão para os Parâmetros</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir <code>function</code> com Parâmetros.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function ola($texto = "mundo"){</code><br>';
            echo '<code>return "Olá $texto!";<br>}</code><br>';

            echo '<code>echo ola();</code><br>';
            echo '<code>echo ola("");</code><br>';
            echo '<code>echo ola("Michael Christian");</code><br>';
            echo '<code>echo ola("Júnior Lima");</code><br><br>';

            echo "<strong>Resultado:</strong> <br>";

            function ola2($texto = "mundo"){
              return "Olá $texto! <br>";
            }

            echo ola2();
            echo ola2("");
            echo ola2("Michael Christian");
            echo ola2("Júnior Lima");

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Passando mais de um Parâmetros</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir <code>function</code> com Parâmetros.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function ola($texto = "mundo", $periodo = "Bom dia"){</code><br>';
            echo '<code>return "Olá $texto!";<br>}</code><br>';

            echo '<code>echo ola();</code><br>';
            echo '<code>echo ola("", "Boa Tarde");</code><br>';
            echo '<code>echo ola("Michael Christian", "Boa noite");</code><br>';
            echo '<code>echo ola("Júnior Lima", "");</code><br><br>';

            echo "<strong>Resultado:</strong> <br>";

            function ola3($texto = "mundo", $periodo = "Bom dia"){
              return "Olá $texto! $periodo<br>";
            }

            echo ola3();
            echo ola3("", "Boa Tarde");
            echo ola3("Michael Christian", "Boa noite");
            echo ola3("Júnior Lima", "");

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função com vários Parâmetros</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir <code>function</code> com Parâmetros.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function ola(){</code><br>';
            echo '<code>$argumentos = func_get_args();</code><br>';
            echo '<code>return $argumentos;<br>}</code><br>';

            echo '<code>var_dump(ola("Bom dia", 10));</code><br>';

            echo "<strong>Resultado:</strong> <br>";

            function bomdia(){
              $argumentos = func_get_args();
              return $argumentos;
            }

            var_dump(bomdia("Bom dia", 10));

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