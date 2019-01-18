<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 64</title>

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
        <h1>Movendo um arquivo</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Movendo/Renomeando o endereçamento de um arquivo</div>
        <div class="panel-body">

         <!--  <h3>
            <small>// <code>move_uploaded_file()</code>: <br>
            </small>
          </h3> -->

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Movendo arquivos de diretórios.<br>

            <strong>Sintaxe da <code>rename();</code> </strong><br><br>

            <pre><strong>Movendo arquivo</strong>
              <code class="php">
                //Cria os diretorios
                $dir1 = "assets/dir/rename/folder_01";
                $dir2 = "assets/dir/rename/folder_02";

                if (!is_dir($dir1)) mkdir($dir1);
                if (!is_dir($dir2)) mkdir($dir2);

                //Cria os arquivos
                $filename = "README.txt";

                if (!file_exists($dir1. DIRECTORY_SEPARATOR. $filename)) {
                  $file = fopen($dir1. DIRECTORY_SEPARATOR. $filename , "w+");

                  fwrite($file, date("Y-m-d H:i:s"));

                  fclose($file);
                }

                //Move/Renomeia o endereçamento do arquivo
                //rename(Origem do arquivo, destino do arquivo)
                rename($dir1. DIRECTORY_SEPARATOR. $filename, $dir2. DIRECTORY_SEPARATOR. $filename);

                echo "Arquivo movido com sucesso!";
              </code>
            </pre>

            <?php

              echo "<strong>Resultado <code>Movendo arquivos de diretórios</code>:</strong><br>";

              //Cria os diretorios
              $dir1 = "assets/dir/rename/folder_01";
              $dir2 = "assets/dir/rename/folder_02";

              if (!is_dir($dir1)) mkdir($dir1);
              if (!is_dir($dir2)) mkdir($dir2);

              //Cria os arquivos
              $filename = "README.txt";

              if (!file_exists($dir1. DIRECTORY_SEPARATOR. $filename)) {
                $file = fopen($dir1. DIRECTORY_SEPARATOR. $filename , "w+");

                fwrite($file, date("Y-m-d H:i:s"));

                fclose($file);
              }

              //Move/Renomeia o endereçamento do arquivo
              //rename(Origem do arquivo, destino do arquivo)
              rename($dir1. DIRECTORY_SEPARATOR. $filename, $dir2. DIRECTORY_SEPARATOR. $filename);

              echo "Arquivo movido com sucesso!";
              
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