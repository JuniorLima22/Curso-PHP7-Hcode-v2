<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 29</title>

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
        <h1>Classe DateTime</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Classe DateTime</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>new</code>: Instânciar uma Classe.<br></small></h3>';          
          echo '<h3><small>// <code>-></code>: Para acessar um método da Classe.<br></small></h3>';
          echo '<h3><small>// <code>format()</code>: è um método da Classe DateTime.<br></small></h3>';
          echo '<h3><small>// <code>DateInterval()</code>: è uma Classe que guarda intervalos de periódo de Datas.<br></small></h3>';
          echo '<h3><small>// <code>add()</code>: è um método da Classe DateTime para Adcionar uma Data.<br></small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir Classe <code>DateTime</code>.<br>";

            /////////////////// Classe DateTime //////////////////
            echo "<strong>Sintaxe da <code>DateTime()</code>: </strong> <br><br>";

            echo '<code>$dt = new DateTime();</code><br><br>';
            echo '<code>echo $dt->format("d/m/Y H:i:s");</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";

            $dt = new DateTime();

            echo $dt->format("d/m/Y H:i:s");

            echo "<br>";
          echo "</div>";

          ?>
        </div>

        <div class="panel-body">
          <?php

          echo '<h3><small>// Classe DateTime com a Classe DateInterval.<br></small></h3>';          
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir Classe <code>DateTime</code> com a Classe <code>DateInterval</code> somando 15 dias.<br>";

            /////////////////// Classe DateTime e Classe DateIntervsal //////////////////
            echo "<strong>Sintaxe da <code>DateTime()</code>: </strong> <br><br>";

            echo '<code>$dt = new DateTime();</code><br><br>';
            echo '<code>$periodo = new DateInterval("P15D");</code><br><br>';
            echo '<code>echo $dt->format("d/m/Y H:i:s");</code><br><br>';
            echo '<code>$dt->add($periodo);</code><br><br>';
            echo '<code>echo $dt->format("d/m/Y H:i:s");</code><br><br>';

            echo "<strong>Resultado 1:</strong>";

            $dt = new DateTime();

            $periodo = new DateInterval("P15D");

            echo $dt->format("d/m/Y H:i:s");

            $dt->add($periodo);

            echo "<br>";

            echo "<strong>Resultado 2:</strong>";

            echo $dt->format("d/m/Y H:i:s");

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