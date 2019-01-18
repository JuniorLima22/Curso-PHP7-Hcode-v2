<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 41</title>

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
        <h1>Incluindo classes com SPL_Autoload_Register</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Incluindo classes com SPL_Autoload_Register</div>
        <div class="panel-body">

          <h3>
            <small>// <code>spl_autoload_register</code>: Significa Standard PHP Library, que em Português seria algo como Biblioteca PHP padrão. São conjunto de Funções nativa do PHP que são usadas para facilitar justamente Lacunas. È uma Função que nos auxilia a registrar mais de uma Função como <code>function __autoload</code>.<br>
            </small>
          </h3>

          <h3>
            <small>// <code>spl_autoload_register</code>: Pode ser utilizado de duas formas.<br>
            1 - Passando uma String no Nome de uma Função.<br>
            2 - Passando Função Anônimas.<br>              
            </small>
          </h3>

          <h3><code>Nota</code>
            <small>// Oi pessoal, tudo bem?<br>

              Nesta aula, no <code><a href="exemplo-40.php" target="_blank">Exemplo 40 - Incluindo classes com Autoload</code></a>, os professores apresentam a função <code>__autoload()</code>, muito usada para configurar o autoload de classes. Entretanto, essa função foi depreciada na versão 7.2 do PHP, o que pode gerar um erro em seu código.<br><br>
              O mais recomendado é que usemos a função <code>spl_autoload_register()</code>, que é explicada pelos professores no <code><a href="exemplo-41.php">Exemplo 41 - Incluindo classes com SPL_Autoload_Register</code></a>.<br>

              <!-- Documentação -->

              <h4>Segue alguns links para consulta:<br></h4>
              <h4>
                <small>Função Autoload:<code> <a href="https://secure.php.net/manual/pt_BR/function.autoload.php" target="_blank">https://secure.php.net/manual/pt_BR/function.autoload.php</a> </code></small></h4>

              <h4><small>Função SPL_Autoload_Register:<code> <a href="https://secure.php.net/manual/pt_BR/function.spl-autoload-register.php" target="_blank">https://secure.php.net/manual/pt_BR/function.spl-autoload-register.php</a> </code></small></h4>

              Bons estudos :).<br>
            </small>
          </h3>
          
          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar um <code>spl_autoload_register</code> das Classes DelRey e Automovéis.<br>

            <strong>Sintaxe da <code>function __autoload($nomeClasse){}</code> </strong><br><br>

            <pre>
              <code class="php">
              // Parte 1: Inclui a Classe DelRey2 (assets/autoload/DelRey2.php)
              // OBS: spl_autoload_register(); Passando uma String no Nome de uma Função
              function incluirClasses($nomeClasse){
                // IF Verifica se o nome dessa Classe já existe
                if (file_exists("assets/autoload/". DIRECTORY_SEPARATOR .$nomeClasse. ".php") === true) {
                  require_once("assets/autoload/". DIRECTORY_SEPARATOR .$nomeClasse. ".php");
                }
              } // End: function incluirClasses($nome)

              //Função que incluir as Classes
              spl_autoload_register("incluirClasses");

              // Parte 2: Inclui a Classe Automovel2 (assets/autoload/classesAbstratas/Automovel2.php)
              //Incluir as Classes da Pasta ClassesAbstratas
              // OBS: spl_autoload_register(); Passando Função Anônima          
              spl_autoload_register(function($nomeClasse){                
                // IF Verifica se o nome dessa Classe existe na Pasta ClassesAbstratas
                // Constante DIRECTORY_SEPARATOR para incluir a Barra do Diretório
                if (file_exists("assets/autoload/classesAbstratas". DIRECTORY_SEPARATOR .$nomeClasse. ".php") === true) {
                  require_once("assets/autoload/classesAbstratas". DIRECTORY_SEPARATOR .$nomeClasse. ".php");
                }
              }); // End: spl_autoload_register(function($nomeClasse)

              $carro = new DelRey2();

              $carro->acelerar(500);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>spl_autoload_register</code>:</strong> <br>";

              // Parte 1: Inclui a Classe DelRey2 (assets/autoload/DelRey2.php)
              // OBS: spl_autoload_register(); Passando uma String no Nome de uma Função
              function incluirClasses($nomeClasse){
                // IF Verifica se o nome dessa Classe já existe
                if (file_exists("assets/autoload/". DIRECTORY_SEPARATOR .$nomeClasse. ".php") === true) {
                  require_once("assets/autoload/". DIRECTORY_SEPARATOR .$nomeClasse. ".php");
                }
              } // End: function incluirClasses($nome)

              //Função que incluir as Classes
              spl_autoload_register("incluirClasses");

              // Parte 2: Inclui a Classe Automovel2 (assets/autoload/classesAbstratas/Automovel2.php)
              //Incluir as Classes da Pasta ClassesAbstratas
              // OBS: spl_autoload_register(); Passando Função Anônima          
              spl_autoload_register(function($nomeClasse){                
                // IF Verifica se o nome dessa Classe existe na Pasta ClassesAbstratas
                // Constante DIRECTORY_SEPARATOR para incluir a Barra do Diretório
                if (file_exists("assets/autoload/classesAbstratas". DIRECTORY_SEPARATOR .$nomeClasse. ".php") === true) {
                  require_once("assets/autoload/classesAbstratas". DIRECTORY_SEPARATOR .$nomeClasse. ".php");
                }
              }); // End: spl_autoload_register(function($nomeClasse)

              $carro = new DelRey2();

              $carro->acelerar(500);

              echo "<br>";
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

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>