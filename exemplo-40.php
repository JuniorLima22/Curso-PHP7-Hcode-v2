<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 40</title>

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
        <h1>Incluindo classes com Autoload</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Incluindo classes com Autoload</div>
        <div class="panel-body">

          <h3>
            <small>// <code>Autoload</code>: Como o próprio nome diz, Carregue Automáticamente. è uma Função colocado dentro do PHP pra que ele carregue as Classes automáticamente sem precisar do Require ou Include<br>
            </small>
          </h3>

          <h3>
            <small>// OBS sobre o <code>Autoload</code>: O <code>autoload</code> só sabe procurar as Classes no mesmo diretório. Ou você terá que configurar fazendo <code>if</code> ou varias outras válidações.<br>
            </small>
          </h3>

          <h3><code>Nota</code>
            <small>// Oi pessoal, tudo bem?<br>

              Nesta aula, no <code><a href="exemplo-40.php">Exemplo 40 - Incluindo classes com Autoload</code></a>, os professores apresentam a função <code>__autoload()</code>, muito usada para configurar o autoload de classes. Entretanto, essa função foi depreciada na versão 7.2 do PHP, o que pode gerar um erro em seu código.<br><br>
              O mais recomendado é que usemos a função <code>spl_autoload_register()</code>, que é explicada pelos professores no <code><a href="exemplo-41.php" target="_blank">Exemplo 41 - Incluindo classes com SPL_Autoload_Register</code></a>.<br>

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
            Criar um <code>__autoload</code> das Classes DelRey e Automovéis.<br>

            <strong>Sintaxe da <code>function __autoload($nomeClasse){}</code> </strong><br><br>

            <pre>
              <code class="php">
                // Função Mágica
                function __autoload($nomeClasse){
                  //Observe que ele traz o nome da Classe e serve para ter a certeza que incluiu todas as Classes
                  // var_dump($nomeClasse);

                  // Quando ele incluir o arquivo DelRey ele vai ver que está Extendendo da Classe Automovel
                  // Ele vai chamar de novo o __autoload passando agora o Automovel
                  require_once("assets/autoload/$nomeClasse.php");
                }

                $carro = new DelRey();

                $carro->acelerar(80);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>autoload</code>:</strong> <br>";

              // Função Mágica
              function __autoload($nomeClasse){
                //Observe que ele traz o nome da Classe e serve para ter a certeza que incluiu todas as Classes
                // var_dump($nomeClasse);

                // Quando ele incluir o arquivo DelRey ele vai ver que está Extendendo da Classe Automovel
                // Ele vai chamar de novo o __autoload passando agora o Automovel
                require_once("assets/autoload/$nomeClasse.php");
              }

              $carro = new DelRey();

              $carro->acelerar(80);

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