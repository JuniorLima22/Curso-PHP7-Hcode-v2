<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 07</title>

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
        <h1>Strings em PHP</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>
			
			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Diferença das "Aspas" - Interpolação de Variáveis</div>
        <div class="panel-body">
          <?php 

          /////////////////// Aspas Duplas //////////////////
          echo "<div class='well well-sm'>";

	          $nome = "Hcode";

	          $nome2 = 'Treinamentos';

	          echo "<strong>Aspas Duplas: </strong> <br>";

	          echo '<code>$nome = "Hcode"</code> <br>';

	          echo '<code>echo = "$nome"</code>: ';

	          echo "$nome";

          echo "</div>";

          /////////////////// Aspas Simples ////////////////////
          echo "<div class='well well-sm'>";

	          echo "<strong>Aspas Simples: </strong> <br>";

	          echo '<code>$nome = "Hcode"</code> <br>';

	          echo "<code>echo = ". "'". '$nome'. "'". "</code>: ";

	          echo '$nome';

	        echo "</div>";

          ?>
        </div>
      </div>
			<!-- END: .panel -->

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Funções Nativas para Strings no PHP</div>
        <div class="panel-body">
          <?php 

          // Documentação
          echo '<h4>Documentação Completa:<small><code> <a href="https://php.net/manual/pt_BR/book.strings.php" target="_blank">https://php.net/manual/pt_BR/book.strings.php</a> </code></small></h4>';

          /////////////////// Uppercase //////////////////
          echo "<div class='well well-sm'>";

          // echo "<h4><small>// strtoupper</small></h4>";

          	$nome = "junior lima";

          	echo "<strong>Strtoupper: </strong> <br>";

	          echo '<code>$nome = "junior lima"</code> <br>';

	          echo '<code>echo strtoupper($nome)</code>: ';

	          echo strtoupper($nome);

          echo "</div>";

          /////////////////// Strtolower ////////////////////
          echo "<div class='well well-sm'>";

          	$nome2 = "JUNIOR LIMA";

	          echo "<strong>Strtolower: </strong> <br>";

	          echo '<code>$nome = "JUNIOR LIMA"</code> <br>';

	          echo '<code>echo strtolower($nome)</code>: ';

	          echo strtolower($nome2);

	        echo "</div>";

	        //////////////// Primeira letra Maiuscula /////////////////
          echo "<div class='well well-sm'>";

          	$nome3 = "junior lima";

	          echo "<strong>Primeira letra Maiuscula: </strong> <br>";

	          echo '<code>$nome = "junior lima"</code> <br>';

	          echo '<code>echo ucwrods($nome)</code>: ';

	          echo ucwords($nome3);

	        echo "</div>";

	        //////////////// Primeira letra da frase Maiuscula /////////////////
          echo "<div class='well well-sm'>";

          	$nome3 = "junior lima";

	          echo "<strong>Primeira letra da frase Maiuscula: </strong> <br>";

	          echo '<code>$nome = "junior lima"</code> <br>';

	          echo '<code>echo = ucfirst($nome)</code>: ';

	          echo ucfirst($nome3);

	        echo "</div>";

	        //////////////// Sunstitui alguma informação /////////////////
          echo "<div class='well well-sm'>";

          	$nome3 = "junior lima";

	          $nome3 = str_replace("i", "1", $nome3);
	          $nome3 = str_replace("a", "7", $nome3);

	          echo "<strong>Sunstitui alguma informação: </strong> <br>";

	          echo '<code>$nome = "junior lima"</code> <br>';

	          echo '<code>echo = str_replace("i", "1", $nome)</code>: ';
	          echo "<br>";
	          echo '<code>echo = str_replace("a", "7", $nome)</code>: ';

	          echo $nome3;

	        echo "</div>";

	        //////////////// Posição da String /////////////////
          echo "<div class='well well-sm'>";

          	$frase = "A repetição é mãe da retenção.";
          	$q = strpos($frase, "mãe");

	          echo "<strong>Posição da String: </strong> <br>";

	          echo '<code>$frase = "A repetição é mãe da retenção."</code> <br>';
	          echo '<code>$q = strpos($frase, "mãe")</code><br>';

	          echo '<code>echo $q</code>: ';

	          echo $q;
	          // var_dump($q);

	        echo "</div>";

	        //////////////// Sunstitui alguma informação composta /////////////////
          echo "<div class='well well-sm'>";

          	$frase = "A repetição é mãe da retenção.";

	          $texto = substr($frase, 0, 17);
	          // $nome3 = str_replace("a", "7", $nome3);

	          echo "<strong>Sunstitui alguma informação composta: </strong> <br>";

	          echo '<code>$frase = "A repetição é mãe da retenção."</code><br>';

	          echo '<code>$texto = substr($frase, 0, 17</code>: ';
	          echo "<br>";
	          echo '<code>echo = $texto</code>: ';

	          echo $texto;
	          // var_dump($texto);

	        echo "</div>";

	        //////////////// Contar caracteries em uma String /////////////////
          echo "<div class='well well-sm'>";

          	$frase1 = "A repetição é mãe da retenção.";

	          echo "<strong>Contar caracteries em uma String: </strong> <br>";

	          echo '<code>$frase = "A repetição é mãe da retenção."</code><br>';

	          echo '<code>echo strlen($frase)</code>: ';

	          echo strlen($frase1);

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