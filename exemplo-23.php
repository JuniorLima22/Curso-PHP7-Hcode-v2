<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 23</title>

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
        <h1>Parâmetros por Valor x por Referência</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros por Valor</div>
        <div class="panel-body">
          <?php

          // echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>$a = 10;</code><br>';
            echo '<code>function trocaValor($b){</code><br>';
            echo '<code>$b += 50;</code><br>';
            echo '<code>return $b;<br>}</code><br>';

            echo '<code>echo trocaValor($a);</code><br>';
            echo '<code>echo $a;</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";
            echo '<code>echo trocaValor($a);</code> = ';

            $a = 10;

            function trocaValor($b) {
              $b += 50;
              return $b;
            }

            echo trocaValor($a);

            echo "<br>";

            echo "<strong>Resultado 2:</strong> ";
            echo '<code>echo $a;</code> = ';

            echo $a;

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros por Referência</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// Passar valores por referência significa que será passado para uma determinada função o endereço de memória onde está alocada aquela variável. É usado o carácter "&" antes do parâmetro recebido pela função. No modo comum é passado uma cópia do valor contido na variável..</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

            echo '<code>$a = 10;</code><br>';
            echo '<code>function trocaValor(&$b){</code><br>';
            echo '<code>$b += 50;</code><br>';
            echo '<code>return $b;<br>}</code><br>';

            echo '<code>echo trocaValor($a);</code><br>';
            echo '<code>echo trocaValor($a);</code><br>';
            echo '<code>echo $a;</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";
            echo '<code>echo trocaValor($a);</code> = ';

            $a = 10;

            function trocaValor2(&$b) {
              $b += 50;
              return $b;
            }

            echo trocaValor2($a);

            echo "<br>";

            echo "<strong>Resultado 2:</strong> ";
            echo '<code>echo trocaValor($a);</code> = ';

            echo trocaValor2($a);

            echo "<br>";

            echo "<strong>Resultado 3:</strong> ";
            echo '<code>echo $a;</code> = ';

            echo $a;

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros por Referência (Foreach)</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir a passagem de Parâmetros dentro do<code>foreach</code>.<br>";

            /////////////////// Function //////////////////
            echo "<strong>Sintaxe da <code>foreach</code>: </strong> <br><br>";

            echo '<code>$pessoa = array(</code><br>';
            echo "<code>'nome'=>'Júnior Lima',</code><br>";
            echo "<code>'idade'=>27<br>);</code><br><br>";

            echo '<code>foreach ($pessoa as &$value){</code><br>';
            echo '<code>if (gettype($value)'. " === 'integer')". '$value += 10;</code><br>';
            echo '<code>echo $value;</code><br><br>';

            echo "<strong>Resultado:</strong> ";
            echo '<code>print_r($pessoa);</code> = ';

            $pessoa = array(

              'nome'=>'Júnior Lima',
              'idade'=>27

            );

            foreach ($pessoa as &$value){

              if (gettype($value) === 'integer') $value += 10;

              echo $value. '<br';
            };

            print_r($pessoa);

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