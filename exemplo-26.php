<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 25</title>

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
        <h1>Função Anônimas</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função Anônimas</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// Função Anônima muito comum no <code>JavaScript</code>. Ela ocorre quando voçê cria uma variável e essa variável recebe uma <code>Função</code>. Essa <code>Função</code> ela é idenficada por quê não tem um nome e basta sua execução sendo dentro de uma variável ou numa execução de comando e também não tem <code>return</code>.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir <code>function</code> Anônima.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>function test($callback) {</code><br>';
            echo '<code>//Processo Lento</code><br>';
            echo '<code>$callback();<br>};</code><br><br>';


            echo '<code>test(function(){</code><br>';
            echo '<code>echo "Terminou!";<br>});</code><br>';

            echo "<strong>Resultado 1:</strong> ";

            function test($callback){
              //Processo Lento
              $callback();
            };

            test(function(){
                echo "Terminou!";
            });

            echo "<br>";
          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função Anônima</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// Colocar a <code>Função</code> dentro de uma variável.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir <code>function</code> Anônima dentro da Variável.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>$fn = function($a){</code><br>';
            echo '<code> var_dump($a);</code><br>';
            echo '<code>};</code><br><br>';


            echo '<code>$fn("Oi");</code><br>';

            echo "<strong>Resultado 1:</strong> ";

            $fn = function($a){
              var_dump($a);
            };

            $fn("Oi");

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