<?php
    ob_start(); // Initiate the output buffer
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 66</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="assets/highlight/styles/monokai-sublime.css">
    <script src="assets/highlight/highlight.pack.js"></script>
  </head>
  <body>

    <?php 
      require_once ("menu.php");
    ?>

    <div class="container">
      
      <div class="page-header">
        <h1>Usando Cookies</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando Cookies</div>
        <div class="panel-body">

          <h3>
            <small>// <code>setcookie()</code>: A função <code>setcookie()</code> define um cookie para ser enviado juntamente com o resto dos cabeçalhos HTTP. Como outros cabeçalhos (headers), os cookies devem ser enviados antes de qualquer saída do seu script (isso é uma restrição do protocolo). O que quer dizer que você deve colocar chamadas a essa função antes de qualquer saída, incluindo as tags <html> e <head> e também espaços em branco.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue links para consulta:<br></h4>
            <h4><small>setcookie:<code> <a href="http://php.net/manual/pt_BR/function.setcookie.php" target="_blank">http://php.net/manual/pt_BR/function.setcookie.php</a></code></small><br>
          </h4>

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar cookie.<br>

            <strong>Sintaxe da <code>setcookie();</code> </strong><br><br>

            <pre><strong>Cookie</strong>
              <code class="php">
                //Colocar antes das Tags HTML
                // Inicia o buffer de saída
                ob_start();

                $data = array("Empresa"=>"Hcode Treinamentos");

                //Define o cookie
                setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

                echo "OK";
              </code>
            </pre>

            <?php

              echo "<strong>Resultado <code>setcookie()</code>:</strong><br>";

              $data = array("Empresa"=>"Hcode Treinamentos");

              //Define o cookie
              setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

              echo "OK";
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Recuperando Cookies</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Recupera Cookie.<br>

            <strong>Sintaxe da <code>rename();</code> </strong><br><br>

            <pre><strong>Recupera Cookie</strong>
              <code class="php">
                if (isset($_COOKIE["NOME_DO_COOKIE"])) {
                  //Verifica o que tem dentro do cookie no caso uma string formatada em JSON
                  var_dump($_COOKIE["NOME_DO_COOKIE"]);

                  //Converte de JSON para ARRAY
                  var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));

                  //Converte de JSON para OBJETO
                  var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

                  //Acessando valores do objeto
                  $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

                  echo $obj->Empresa;

                }
              </code>
            </pre>

            <?php

              echo "<strong>Resultado <code>setcookie()</code>:</strong><br>";

              if (isset($_COOKIE["NOME_DO_COOKIE"])) {
                //Verifica o que tem dentro do cookie no caso uma string formatada em JSON
                var_dump($_COOKIE["NOME_DO_COOKIE"]);

                echo "<br><br><strong>Resultado <code>Converte de JSON para ARRAY</code>:</strong><br>";

                //Converte de JSON para ARRAY
                var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));

                echo "<br><br><strong>Resultado <code>Converte de JSON para OBJETO</code>:</strong><br>";

                //Converte de JSON para OBJETO
                var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

                echo "<br><br><strong>Resultado <code>Acessando valores do objeto</code>:</strong><br>";

                //Acessando valores do objeto
                $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

                echo $obj->Empresa;

              }
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- END: Exemplos -->

			<hr>

			<div class="col-sm-6">
	      <a href="index.php"><button class="btn btn-primary">Voltar</button></a>
	    </div>
    </div> <!-- End: .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>