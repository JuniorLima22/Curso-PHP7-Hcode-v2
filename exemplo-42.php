<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 42</title>

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
        <h1>Usando Namespace</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Organizando as Classes e Diretórios</div>
        <div class="panel-body">

          <h3>
            <small>// <code>Namespace</code>: Ele permite agrupar as Classes dentro de diretórios de uma forma organizada, não adianta ter uma pasta com todas as Classes jogada lá dentro e achar que isso está organizado.<br>
            </small>
          </h3>

          <h3>
            <small>// <code>OBS</code>: Sempre recomendado fazer uma Documentação especficando cada arquivo, dessa forma você terá um codigo cada vez mais robusto e légivel.<br>
            </small>
          </h3>

          <h3><code>Nota</code>
            <small>// Olá pessoal<br>

              Se você estiver utilizando Linux ou Mac, pode se deparar com um erro ao reproduzir o exemplo da aula.<br>

              Para resolver esse problema, deixe a sua variável <code>$filename</code> no arquivo config.php assim:<br>

              <code>$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");</code><br>

              Abraço :).<br>
            </small>
          </h3>

          <!-- Documentação -->
          <!-- <h4>Segue alguns links para consulta:<br></h4>
            <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
            <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
              

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Organizando as Classes e Diretórios.<br>

            <strong>Sintaxe da <code>$cad = new Cadastro();</code> </strong><br><br>

            <pre>
              <code class="php">
                require_once("assets/namespace/config.php");

                $cad = new Cadastro();

                $cad->setNome("Junior Lima");              
                $cad->setEmail("negstonseventos@hotmail.com");              
                $cad->setSenha("juniorlimajesusteama");

                echo $cad; 
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>class</code>:</strong> <br>";

              require_once("assets/namespace/config.php");

              $cad = new Cadastro();

              $cad->setNome("Junior Lima");              
              $cad->setEmail("negstonseventos@hotmail.com");              
              $cad->setSenha("juniorlimajesusteama");

              echo $cad;              

              echo "<br>";
              ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando Namespace</div>
        <div class="panel-body">           

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Usar <code>namespace</code> das Classes Cadastro Geral e Cadastro Cliente para registrar uma Venda.<br>

            <strong>Sintaxe da <code>use Cliente\Cadastro;</code> </strong><br><br>

            <pre>
              <code class="php">
                require_once("assets/namespace/config.php");

                //Para utilizar o namespace precisa usar a palavra reservado (use)
                use Cliente\Cadastro;

                //Agora essa Class Cadastro se refere a Classe que esta dentro da pasta Cliente/Cadastro.php
                $cad = new Cadastro();

                $cad->setNome("Junior Lima");              
                $cad->setEmail("negstonseventos@hotmail.com");              
                $cad->setSenha("juniorlimajesusteama");

                $cad->registrarVenda(); 
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>namespace</code>:</strong> <br>";

              require_once("assets/namespace/config.php");

              //Para utilizar o namespace precisa usar a palavra reservado (use)
              use Cliente\Cadastro;

              //Agora essa Class Cadastro se refere a Classe que esta dentro da pasta Cliente/Cadastro.php
              $cad = new Cadastro();

              $cad->setNome("Junior Lima");              
              $cad->setEmail("negstonseventos@hotmail.com");              
              $cad->setSenha("juniorlimajesusteama");

              $cad->registrarVenda();              

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