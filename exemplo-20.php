<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 20</title>

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
        <h1>Funções para Sessão</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Armazenamento da Sessão</div>
        <div class="panel-body">
          <?php

          // Documentação
          echo '<h4>Funções para Sessão:<small><code> <a href="http://php.net/manual/pt_BR/book.session.php" target="_blank">http://php.net/manual/pt_BR/book.session.php</a> </code></small></h4>';

          echo '<h3><small>// <code>session_save_path</code> Obtém e/ou define o caminho para armazenamento da sessão atual.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir caminho da  <code>". '$_SESSION'. "</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

            echo '<code>session_start();</code><br>';
            echo '<code>echo session_save_path();</code><br><br>';

            echo "<strong>Resultado:</strong> ";
            // echo '<code>echo session_save_path();</code> = ';

            session_start();

            echo session_save_path();

          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Status da Sessão</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>session_status</code> Retorna o status atual da sessão.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Retornar Status atual da  <code>". '$_SESSION'. "</code>.<br>";

            /////////////////// _SESSION //////////////////
            echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

            echo '<code>session_start();</code><br>';
            echo '<code>var_dump(session_status());</code>';

            echo '<h3><small>// Valor Retornado.</small></h3>';

            echo '<h4>PHP_SESSION_DISABLED:<small> Se as sessões estiverem desabilitadas.</small></h4>';
            echo '<h4>PHP_SESSION_NONE:<small> Se as sessões estiverem habilitadas, mas nenhuma existir.</small></h4>';
            echo '<h4>PHP_SESSION_ACTIVE:<small> Se as sessões estiverem habilitadas, e uma existir.</small></h4>';


            echo "<strong>Resultado:</strong> ";

            session_start();

            var_dump(session_status());

            // $status = session_status();

            echo "<br>";

            switch (session_status()) {
              case PHP_SESSION_DISABLED:
                echo "<h4>PHP_SESSION_DISABLED:<small> Se as sessões estiverem desabilitadas.</small></h4>";
                break;
              
              case PHP_SESSION_NONE:
                echo "<h4>PHP_SESSION_NONE:<small> Se as sessões estiverem habilitadas, mas nenhuma existir.</small></h4>";
                break;

                case PHP_SESSION_ACTIVE:
                echo "<h4>PHP_SESSION_ACTIVE:<small> Se as sessões estiverem habilitadas, e uma existir.</small></h4>";
                break;
            }

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