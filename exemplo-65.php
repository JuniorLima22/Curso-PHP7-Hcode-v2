<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 65</title>

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
        <h1>Usando a cURL</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando a cURL</div>
        <div class="panel-body">

          <h3>
            <small>// <code>cURL()</code>: È uma biblioteca que permite que nosso sistema PHP converse com outros sistemas remotos.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue links para consulta:<br></h4>
            <h4><small>Web Service ViaCep:<code> <a href="https://viacep.com.br/" target="_blank">https://viacep.com.br/</a></code></small><br>
          </h4>

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Verificar CEP utilizando a biblioteca cURL.<br>

            <strong>Sintaxe da <code>rename();</code> </strong><br><br>

            <pre><strong>Movendo arquivo</strong>
              <code class="php">
                $cep = "62050840";
                $link = "https://viacep.com.br/ws/$cep/json/";

                $ch = curl_init($link);

                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                //Essa opção não vai validar se existir o SSL se está registrado em algum orgão certificadora 
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

                //Pegando a resposta
                $response = curl_exec($ch);

                //Fecha a conexão
                curl_close($ch);

                //Transforma o JSON em Array
                $data = json_decode($response, true);

                print_r($data);

                print_r($data["localidade"]);
              </code>
            </pre>

            <?php

              echo "<strong>Resultado <code>cURL()</code>:</strong><br>";

              $cep = "62050840";
              $link = "https://viacep.com.br/ws/$cep/json/";

              //Inicia a Biblioteca cURL
              $ch = curl_init($link);

              //Envia e informa que quer um retorno
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

              //Essa opção não vai validar se existir o SSL se está registrado em algum orgão certificadora 
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

              //Pegando a resposta
              $response = curl_exec($ch);

              //Fecha a conexão
              curl_close($ch);

              //Transforma o JSON em Array
              $data = json_decode($response, true);

              print_r($data);

              echo "<br><br><strong>Resultado <code>cURL() com a cheve especifica [\"localidade\"]</code>:</strong><br>";

              print_r($data["localidade"]);
              
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