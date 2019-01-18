<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 02</title>

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
            <a href="#" class="navbar-brand">PHP 7</a>
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
        <h1>Padrões de Variáveis</h1>
      </div>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Padrões de Variáveis</div>
        <div class="panel-body">
					<?php 
						$anoNascimento = 1990;

						$nomeCompleto = "Francisco Lima Cordeiro Júnior";

						echo "$anoNascimento".","." "."$nomeCompleto";

					 ?>
        </div>
      </div>
      <!-- END: .panel -->

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

			  <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>PHP Não aceita</div>
        <div class="panel-body">
					<?php 

						//Padroes de variaveis
						
						$nome1 = "Júnior Lima";
						echo "Correto: ". '<code>$nome1 = Júnior Lima</code>'. " = $nome1";

						echo "<br>";

						// PHP Não aceita número antes
						echo "PHP Não aceita Número antes: <code>$1nome = Junior</code>"; 

						echo "<br>";

						// PHP Não aceita caracteres
						echo "PHP Não aceita Caracteres antes: <code>$%nome = Junior</code>";
					 ?>
        </div>
      </div>
			
			<!-- BEGIN: .panel -->
    	<div class="panel panel-primary">
	      <div class="panel-heading"><a href="" id="tiposBasicos"></a>Limpar ou Destroi a Variável</div>
	      <div class="panel-body">
					<?php 

					// Limpa(destroi) a variavel ou seja elimina a variavel da memoria	
						unset($nome1);
						echo "<h5><small>// Limpa (Destroi) a variavel ou seja elimina a variavel da memória.</small></h5>";
						echo "Limpa/Destroi: <code>unset(". '$nome1'. ")</code>";

					?>
	      </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
    	<div class="panel panel-primary">
	      <div class="panel-heading"><a href="" id="tiposBasicos"></a>Pra saber se a variável existe</div>
	      <div class="panel-body">
					<?php 

				//Pra saber se a variavel existe
						if (isset($nome1)) {
							echo "$nome1";
						}

					echo "<h5><small>// Pra saber se a variavel existe.</small></h5>";

					echo "<code>(isset(". '$nome1'. ")) {</code>";
					echo "<br>";
					echo "<code>echo ". '$nome1'. ";</code>";
					echo "<br>";
					echo "<code>}</code>";

					?>
	      </div>
      </div>
      <!-- END: .panel -->

      <hr>

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