<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 21</title>

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
        <h1>Criando Funções de Usuário</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Function (Sub-rotina)</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir  <code>function</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function ola(){</code><br>';
            echo '<code>echo "Olá Mundo!";<br>}</code><br>';
            echo '<code>ola();</code><br><br>';

            echo "<strong>Resultado:</strong> ";

            function ola(){
              echo "Olá Mundo! <br>";
            }

            ola();


          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Function</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir  <code>function</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function ola(){</code><br>';
            echo '<code>return "Olá Mundo!";<br>}</code><br>';
            echo '<code>echo ola();</code><br><br>';

            echo "<strong>Resultado:</strong> ";

            function ola2(){
              return "Olá Mundo! <br>";
            }

            echo ola2();

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Function</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Calcular salário de Júnior Lima com <code>function</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function salario(){</code><br>';
            echo '<code>return 946.00;<br>}</code><br>';
            echo '<code>echo "Júnior Lima recebeu 3 salários: ". (salario()*3);</code><br><br>';

            echo "<strong>Resultado:</strong> ";

            function salario(){
              return 946.00;
            }

            echo "Júnior Lima recebeu 3 salários: ". (salario()*3);

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