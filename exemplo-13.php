<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 13</title>

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
        <h1>Laços de repetição - Foreach</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

			<!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Foreach</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// O <code>foreach</code> que significa para CADA, é uma estrutura de repetição do PHP que utilizamos para percorrer <code>ARRAY</code> e Coleções. Supondo que tenho uma <code>ARRAY</code> ou Variável com varios valores, para cada itens que exitem dentro da variavel repita uma determinada instrução.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo '<code>Imprimir o Mês dentro da Variável Meses</code><br>';

            /////////////////// Foreach //////////////////
            echo "<strong>Sintaxe do Foreach: </strong> <br>";

            echo '<code>$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");</code><br><br>';

            echo '<code>foreach ($meses as $mes) {</code><br>';

            echo '<code>echo "O mês é: ".'. '$mes'. ";<br>}</code><br>";

            echo "<strong>Resultado:</strong><br>";

            $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

            foreach ($meses as $mes) {
              echo "O mês é: ". $mes. "<br>";
            }

          echo "</div>";

          ?>
        </div>
      </div>
			<!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Foreach (com posição do Array)</div>
        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo '<code>Imprimir o Mês dentro da Variável Meses</code><br>';

            /////////////////// Foreach //////////////////
            echo "<strong>Sintaxe do Foreach: </strong> <br>";

            echo '<code>$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");</code><br><br>';

            echo '<code>foreach ($meses as $index => $mes) {</code><br>';

            echo '<code>echo "Indice: ".'. '$index'. ";</code><br>";

            echo '<code>echo "O mês é: ".'. '$mes'. ";<br>}</code><br>";

            echo "<strong>Resultado:</strong><br>";

            $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

            foreach ($meses as $index => $mes) {

              echo "Indice: ". $index. "<br>";
              echo "O mês é: ". $mes. "<br><br>";
            }

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Foreach (com Formulário)</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Prencha o Formulário: </strong> <br>
            <!-- Como no form não foi colocado o action, por padrão é a propria página. -->
            <!-- Como no form não foi colocado o method, por padrão é a GET. -->
            <form>
              <input type="text" name="nome">
              <input type="date" name="nascimento">
              <input type="submit" value="OK">
            </form> <hr>

            <?php

            // Adciona o if para não aparecer um Notice de Não definido
            if (isset($_GET)) {

              foreach ($_GET as $key => $value) {

                echo "<strong>Nome do campo: </strong>". $key. "<br>";
                echo "<strong>Valor do campo: </strong>". $value. "<br>";

                echo "<hr>";

              }
            }

            ?>
          </div>

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