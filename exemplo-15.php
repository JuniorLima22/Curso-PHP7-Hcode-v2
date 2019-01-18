<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 15</title>

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
        <h1>Arrays em PHP</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Arrays em PHP (Vetor)</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// Todo <code>Array</code> inicia em <code>0</code>.<br>// Quando o <code>Array</code> tem uma dimensão ele é chamado de <code>Vetor</code>, pra ser um <code>Array</code> propriamente dito ele teria que ter mais de uma dimensão, ele é chamado de <code>Array</code> Bidimensional, Tridimensional ou assim por diante.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Exibir valores da <code>$frutas</code>.<br>';

            /////////////////// Array //////////////////
            echo "<strong>Sintaxe do Array (Vetor): </strong> <br>";

            echo '<code>$futas = array("Laranja", "Abacaxi", "Melancia");</code><br><br>';

            echo '<code>print_r($frutas);</code><br>';

            echo "<strong>Resultado:</strong><br>";

            $frutas = array("Laranja", "Abacaxi", "Melancia");

            print_r($frutas);
            // echo $frutas[1];
            // echo $frutas[1][5];

          echo "</div>";

          ?>
        </div>
      </div>
			<!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Bidimensional</div>
        <div class="panel-body">
          <?php

            $carros[0][1] = "GM";
            $carros[0][2] = "Cobalt";
            $carros[0][3] = "Onix";
            $carros[0][4] = "Camaro";

            $carros[1][1] = "Ford";
            $carros[1][2] = "Fiesta";
            $carros[1][3] = "Fusion";
            $carros[1][4] = "EcoSport";
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Exibir valores da <code>$carros</code>.<br>';

            /////////////////// Array Bidimensional //////////////////
            echo "<strong>Sintaxe do Array Bidimensional: </strong> <br>";

            echo '<code>$carros[0][1] = "GM";</code><br>';
            echo '<code>$carros[0][2] = "Cobalt";</code><br>';
            echo '<code>$carros[0][3] = "Onix";</code><br>';
            echo '<code>$carros[0][4] = "Camaro";</code><br><br>';

            echo '<code>$carros[1][1] = "Ford";</code><br>';
            echo '<code>$carros[1][2] = "Fiesta";</code><br>';
            echo '<code>$carros[1][3] = "Fusion";</code><br>';
            echo '<code>$carros[1][4] = "EcoSport";</code><br><br>';

            echo "<strong>Resultado 1:</strong><br>";
            echo '<code>echo $carros[0][3];</code> = ';
            echo $carros[0][3]."<br>";

            echo "<strong>Resultado 2:</strong><br>";
            echo '<code>echo end($carros[1]);</code> = ';
            echo end($carros[1]);

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Bidimensional</div>
        <div class="panel-body">
          <?php

            $pessoas = array();

            array_push($pessoas, array(
              'nome' => 'Júnior Lima',
              'idade' => 27
            ));

            array_push($pessoas, array(
              'nome' => 'Michael Christian',
              'idade' => 3
            ));

            // print_r($pessoas);
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Exibir valores da <code>$pessoas</code>.<br>';

            /////////////////// Array Bidimensional //////////////////
            echo "<strong>Sintaxe do Array Bidimensional: </strong> <br>";

            echo '<code>$pessoas = array();</code><br>';
            echo '<code>array_push($pessoas, array(</code><br>';
            echo "<code>'nome' => 'Júnior Lima',</code><br>";
            echo "<code>'idade' => 27</code><br>";
            echo "<code>));</code><br><br>";

            echo '<code>array_push($pessoas, array(</code><br>';
            echo "<code>'nome' => 'Michael Christian',</code><br>";
            echo "<code>'idade' => 3</code><br>";
            echo "<code>));</code><br><br>";

            echo "<strong>Resultado 1:</strong><br>";
            echo '<code>print_r($pessoas);</code> = ';
            print_r($pessoas);

            echo "<br>";

            echo "<strong>Resultado 2:</strong><br>";
            echo '<code>print_r($pessoas[1]);</code> = ';
            print_r($pessoas[1]);

            echo "<br>";

            echo "<strong>Resultado 3:</strong><br>";
            echo "<code>print_r(".'$pessoas'. "[1]['nome']);</code> = ";
            print_r($pessoas[1]['nome']);

            echo "<br>";

            echo "<strong>Resultado 4:</strong><br>";
            echo "<code>print_r(". '$pessoas'. "[1]['idade']);</code> = ";
            print_r($pessoas[1]['idade']);
            

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