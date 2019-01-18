<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 62</title>

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
        <h1>Upload de arquivos com PHP 7</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Upload de arquivos com PHP 7</div>
        <div class="panel-body">

          <h3>
            <small>// <code>move_uploaded_file()</code>: <br>
            </small>
          </h3>

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Fazer upload de um arquivo.<br>

            <strong>Sintaxe da <code>move_uploaded_file();</code> </strong><br><br>

            <pre><strong>Upload arquivo</strong>
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

            <strong>Resultado <code>move_uploaded_file()</code>:</strong><br><br>

            <form method="POST" enctype="multipart/form-data">

              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group">
                    <input type="file" name="fileUpload" required="" class="form-control input-file">
                    <span class="help-block">2MB por arquivo</span>                    
                  </div>
                </div>

                <div class="mbr-buttons mbr-buttons--right">
                  <button type="submit" class="mbr-buttons__btn btn btn-danger">ENVIAR</button>
                </div>
              </div><!-- End: .row -->
            </form>

            <?php

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
                  // echo "<strong>Upload</strong> realizado com sucesso!";
                  echo "<div class=\"alert alert-info\" role=\"alert\">Upload realizado com sucesso!</div>";
                }else{
                  throw new Exception("<div class=\"alert alert-danger\" role=\"alert\">Não foi possivel realizar o upload!</div>"); 
                }
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