<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 03</title>

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

    <!-- BEGIN: .container -->
    <div class="container">
      
      <div class="page-header">
        <h1>Tipos de dados no PHP (8 tipos)</h1>
      </div>

		  <hr> <!-- Exemplos -->
			<h4>Exemplos</h4>
      
      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Tipos Básicos</div>
        <div class="panel-body">

          <h3>
            <small>// Tipos Basicos: <br>
              <code>String</code>  = Letras <br>
                <code>Inteiro</code> = Numerico <br>
                <code>Ponto flutuante</code> = casas decimais <br>
                <code>Buleano</code> = Verdadeiro ou Falso.<br>
            </small>
          </h3>

          <h3>
            <small>// Tipos Compostos: <br>
              <code>Array</code><br>
              <code>Objeto  = POO</code><br>
            </small>
          </h3>

          <h3>
            <small>// Tipos Especial: <br>
              <code>Resource</code><br>
              <code>Null</code><br>
            </small>
          </h3>

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Exibir tipo de dados no PHP.<br>

            <strong>Sintaxe da <code></code> </strong><br><br>

            <pre>
              <code class="php">
                ///////////// Tipos Basicos ///////////////////
                $nome = "Junior Lima";
                $site = 'bit.ly/JrLimaSystem';

                $ano = 1990;
                $salario = 5500.99;
                $bloqueado = false;

               echo "String (Letras): $nome";
               echo "String (Letras): $site";
               echo "Inteiro (Númerico): $ano";
               echo "Ponto flutuante (Casas Decimais): $salario";
               echo "Buleano (Verdadeiro ou Falso): ". '$bloqueado'. " = false";
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>String</code>: </strong>";

              ///////////// Tipos Basicos ///////////////////
              $nome = "Junior Lima";
              $site = 'bit.ly/JrLimaSystem';

              $ano = 1990;
              $salario = 5500.99;
              $bloqueado = false;

             echo "String (Letras): $nome <br>";

             echo "<strong>Resultado <code>String</code>: </strong>";
             echo "String (Letras): $site <br>";

             echo "<strong>Resultado <code>Inteiro</code>: </strong>";
             echo "Inteiro (Númerico): $ano <br>";

             echo "<strong>Resultado <code>Ponto Flutuante</code>: </strong>";
             echo "Ponto flutuante (Casas Decimais): $salario <br>";

             echo "<strong>Resultado <code>Buleano</code>: </strong>";
             echo "Buleano (Verdadeiro ou Falso): ". '$bloqueado'. " = false";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading">Tipos Compostos</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Exibir tipo de dados no PHP.<br>

            <strong>Sintaxe da <code></code> </strong><br><br>

            <pre>
              <code class="php">
                ////////// Array ////////////
                $frutas = array("Abacaxi", "Laranja", "Manga");

                echo $frutas[1];

                ////////// POO //////////

                $nascimento = new Datetime();

                var_dump($nascimento);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Array</code>: </strong>";

              ////////// Array ////////////
              $frutas = array("Abacaxi", "Laranja", "Manga");

              echo $frutas[1];

              echo "<br>";

              ////////// POO //////////
              echo "<strong>Resultado <code>POO</code>: </strong>";

              $nascimento = new Datetime();

              var_dump($nascimento);
            ?>
          </div> <!-- End: .well well-sm -->
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading">Tipos Especial</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Exibir tipo de dados no PHP.<br>

            <strong>Sintaxe da <code></code> </strong><br><br>

            <pre>
              <code class="php">
                ////////// Resource ////////////
              
                $arquivo = fopen("exemplo-03.php", "r");
                var_dump($arquivo);

                ////////// Null //////////
                // Null = Ausencia de valor ou seja não existe.
                // Vazio = Elefoi iniciado já está reservado na memória só não tem informação.

                $nulo = Null;
                $vazio = "";
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Null e Vazio</code>: </strong>";

              ////////// Resource ////////////
              
              $arquivo = fopen("exemplo-03.php", "r");
              var_dump($arquivo);

              ////////// Null //////////
              // Null = Ausencia de valor ou seja não existe.
              // Vazio = Elefoi iniciado já está reservado na memória só não tem informação.

              $nulo = Null;
              $vazio = "";
            ?>
          </div> <!-- End: .well well-sm -->
        </div>
      </div>
      <!-- END: .panel -->

		  <hr>

  		<div class="col-sm-6">
        <a href="index.php"><button class="btn btn-primary">Voltar</button></a>
      </div>

    </div>
    <!-- END: .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>