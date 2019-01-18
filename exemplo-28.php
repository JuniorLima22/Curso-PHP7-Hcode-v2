<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 28</title>

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
        <h1>Definindo a configuração regional com setlocale()</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função <code>setlocale()</code> com <code>strftime()</code></div>
        <div class="panel-body">
          <?php

          // Documentação
          echo '<h4>Função Setlocale():<small><code> <a href="https://secure.php.net/manual/pt_BR/function.strftime.php" target="_blank">https://secure.php.net/manual/pt_BR/function.strftime.php</a> </code></small></h4>';

          echo '<h3><small>// <code>strftime</code>: Formata uma hora/data local de acordo com a configuração do idioma. Nome do mês e dia da semana e outras strings respeitam o idioma corrente definido com a função <code>setlocale()</code>.<br></small></h3>';          

          echo '<h3><small>// <code>LC_ALL</code>: é uma constante do PHP.<br></small></h3>';
          echo '<h3><small>// <code>ucwords()</code>: Transforma a primeira letra em Maiúscula.<br></small></h3>';
          echo '<h3><small>// Padrão de Linguagem a ser usada: Recomenda-se ultilizar os 3, pois fica idependente de plataforma. <br>
                Linux: <code>pt_BR</code> <br>
                Windows: <code>portuguese</code> <br>
                Acentuação e Caracteres: <code>pt_BR.utf-8</code>
          </small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir Função <code>setlocale</code> com os parâmetros do <code>strftime()</code>.<br>";

            /////////////////// setlocale //////////////////
            echo "<strong>Sintaxe da <code>setlocale()</code>: </strong> <br><br>";

            echo '<code>setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");</code><br><br>';
            echo '<code>echo ucwords(strftime("%d %A %B %Y"));</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";

            setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

            echo ucwords(strftime("%d %A %B %Y"));

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