<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 04</title>

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
      
      <!-- Barra de Navegaçao-->
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
              <li><a href="">Home</a></li>
              <li><a href="">Empresa</a></li>
              <li><a href="">Clientes</a></li>
              <li><a href="">Produto</a></li>

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Minha Conta <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="">Editar</a></li>
                  <li><a href="">Logout</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div><!-- /container -->
      </nav>

    <div class="container">
      
      <div class="page-header">
        <h1>Variáveis Pré-definida (Arrays Super Globais)</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <div class="panel panel-default">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Arrays Super Globais</div>
        <div class="panel-body">
          <?php 
          ///////////// Arrays Super Globais ///////////////////
          //Toda informação vinda por _GET ou _POST será String
          //http://localhost/udemy/Projeto_PHP/php/exemplo-04.php?a=123

            $nome = $_GET["a"];

            var_dump($nome);
            
           ?>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Conversão (Casting)</div>
        <div class="panel-body">
          <?php 
            ////////// Mudar o tipo da Variável ////////////
            $nome = (int)$_GET["a"];

            var_dump($nome);
           ?>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Enviar mais de uma informação via _GET</div>
        <div class="panel-body">
          <?php 
          ////////// IP ////////////
          
            $nome = (int)$_GET["a"];

            var_dump($nome);

           ?>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">IP do Usuário</div>
        <div class="panel-body">
          <?php 
          ////////// IP ////////////
          
            $ip = $_SERVER["REMOTE_ADDR"];

            echo "$ip";
           ?>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">Endereço da URL (Ideal para Sistema de Log's)</div>
        <div class="panel-body">
          <?php 
          ////////// Log's ////////////
          
            $ip = $_SERVER["SCRIPT_NAME"];

            echo "$ip";
           ?>
        </div>
      </div>
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