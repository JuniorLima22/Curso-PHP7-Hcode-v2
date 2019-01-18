<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 63</title>

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
        <h1>Download de arquivos com file_get_contents</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Download de arquivos com file_get_contents</div>
        <div class="panel-body">

         <!--  <h3>
            <small>// <code>move_uploaded_file()</code>: <br>
            </small>
          </h3> -->

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Fazer download de um arquivo.<br>

            <strong>Sintaxe da <code>move_uploaded_file();</code> </strong><br><br>

            <pre><strong>Download arquivo</strong>
              <code class="php">
                //Tratar o botão enviar se for um método POST entendisse que está recebendo um arquivo também
                //se não só mostra o formulário
                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                  //Recupera arquivo e guarda irformações
                  $file = $_FILES["fileUpload"];

                  if ($file["error"]) {
                    throw new Exception("Error: ". $file["error"]);
                  }

                  //Nome do diretorio que vai receber os arquivos. È importante ser um diretorio a parte porque
                  //ele preceisa de permição de escrita, e esse diretorio não é recomendado que tenha PHP se não
                  //você sobe um arquivo PHP e ele vai ser executado lá dentro.
                  $dirUploads = "assets/dir/upload/uploads";

                  //Verifica se o diretorio existe se não cria um
                  if (!is_dir($dirUploads)) {
                    mkdir($dirUploads);
                  }

                  //Upload do arquivo
                  if (move_uploaded_file($file["tmp_name"], $dirUploads. DIRECTORY_SEPARATOR. $file["name"])) {
                    echo "<strong>Upload</strong> realizado com sucesso!";
                  }else{
                    throw new Exception("Não foi possivel realizar o upload."); 
                  }
                }
              </code>
            </pre>

            <?php

              echo "<strong>Resultado <code>Ler o binário do conteudo do arquivo</code>:</strong><br><br>";

              $link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

              //Ler o binário do conteudo do arquivo
              $content = file_get_contents($link);

              var_dump($content);

              echo "<br><br><strong>Resultado <code>Transfere o arquivo que vem na URL em um arquivo real</code>:</strong><br>";

              //Joga dentro do arquivo fisico no nosso servidor
              //Transfere o arquivo que vem na URL em um arquivo real
              $parse = parse_url($link);

              var_dump($parse);

              echo "<br><br><strong>Resultado <code>somente o nome do arquivo</code>:</strong><br>";

              //Pega somente o nome do arquivo
              var_dump(basename($parse["path"]));

              echo "<br><br><strong>Resultado <code>download do arquivo</code>:</strong><br>";

              $basename = basename($parse["path"]);

              //Cria o arquivo com conteudo dele, no disco do servidor
              $file = fopen("assets/dir/download/". $basename, "w+");

              fwrite($file, $content);

              fclose($file);
              
              echo "<br><br>";
            ?>

            <!-- Chama a imagem com a $basename -->

            <img src="<?="assets/dir/download/". $basename?>">

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