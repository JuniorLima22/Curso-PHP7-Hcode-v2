<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 24</title>

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
        <h1>Funções no PHP 7 Novidades</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Declaração de Tipos Escalares (Parâmetro)</div>
        <div class="panel-body">
          <?php

          // echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function soma(int ...$valores) {</code><br>';
            echo '<code>return array_sum($valores);<br>}</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";
            echo '<code>echo soma(2, 2);</code> = ';

            function soma(int ...$valores) {

                return array_sum($valores);
            }

            echo soma(2, 2);
            echo "<br>";

            echo "<strong>Resultado 2:</strong> ";
            echo '<code>echo soma(25, 33);</code> = ';

            echo soma(25, 33);
            echo "<br>";

            echo "<strong>Resultado 3:</strong> ";
            echo '<code>echo soma(1.5, 3.2);</code> = ';

            echo soma(1.5, 3.2);
            echo "<br>";

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Declaração de Tipos de Retorno (Parâmetro)</div>
        <div class="panel-body">
          <?php

          // echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function soma(int ...$valores):string {</code><br>';
            echo '<code>return array_sum($valores);<br>}</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";
            echo '<code>echo var_dump(soma1(2, 2));</code> = ';

            function soma1(int ...$valores):string {

                return array_sum($valores);
            }

            echo var_dump(soma1(2, 2));
            echo "<br>";

            echo "<strong>Resultado 2:</strong> ";
            echo '<code>echo soma(25, 33);</code> = ';

            echo soma1(25, 33);
            echo "<br>";

            echo "<strong>Resultado 3:</strong> ";
            echo '<code>echo soma(1.5, 3.2);</code> = ';

            echo soma1(1.5, 3.2);
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