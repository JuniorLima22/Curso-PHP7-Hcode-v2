<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 16</title>

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
        <h1>JSON (JavaScript Object Notation)</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>JSON_ENCODE (Gerar um JSON do Array)</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>JSON</code> - (<code>JavaScript Object Notation</code>), é uma notação criada básicamente pro <code>JavaSript</code> que tomou todo o universo da programação. Ela gera um arquivo no formato de comunicação que facilita a integração de sistemas (Interoperatividade de Sistemas), criado por Douglas Crockford em 2000. O <code>JSON</code> é ultilizado praticamente em todas as linguagens e ele tem tudo a ver com <code>ARRAYS</code>.</small></h3>';

            $pessoas = array();

            array_push($pessoas, array(
              'nome' => 'Junior Lima',
              'idade' => 27
            ));

            array_push($pessoas, array(
              'nome' => 'Michael Christian',
              'idade' => 3
            ));

            // print_r($pessoas);
            // echo json_encode($pessoas);
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Gerar o <code>json_encode</code> da váriavel <code>$pessoas</code>.<br>';

            /////////////////// Array Bidimensional //////////////////
            echo "<strong>Sintaxe do JSON_ENCODE: </strong> <br>";

            echo '<code>$pessoas = array();</code><br>';
            echo '<code>array_push($pessoas, array(</code><br>';
            echo "<code>'nome' => 'Júnior Lima',</code><br>";
            echo "<code>'idade' => 27</code><br>";
            echo "<code>));</code><br><br>";

            echo '<code>array_push($pessoas, array(</code><br>';
            echo "<code>'nome' => 'Michael Christian',</code><br>";
            echo "<code>'idade' => 3</code><br>";
            echo "<code>));</code><br><br>";

            echo "<strong>Resultado:</strong><br>";
            echo '<code>echo json_encode($pessoas);</code> = ';
            echo json_encode($pessoas);

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>JSON_DECODE (Gerar um Array do JSON)</div>
        <div class="panel-body">
          <?php

            $json = '[{"nome":"Junior Lima","idade":27},{"nome":"Michael Christian","idade":3}]';

            $data = json_decode($json, true);

            // var_dump($data);
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo 'Exibir <code>Array</code> do <code>JSON</code>.<br>';

            /////////////////// Array Bidimensional //////////////////
            echo "<strong>Sintaxe do JSON_DECODE: </strong> <br>";

            echo '<code>$json = [{"nome":"Junior Lima","idade":27},{"nome":"Michael Christian","idade":3}];</code><br>';

            echo '<code>$data = json_decode($json, true);</code><br>';

            echo '<code>var_dump($data);</code><br>';

            echo "<strong>Resultado:</strong><br>";
            var_dump($data);

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