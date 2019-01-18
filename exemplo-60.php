<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 60</title>

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
        <h1>Excluindo arquivos</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Excluindo arquivos</div>
        <div class="panel-body">

          <h3>
            <small>// <code>unlink</code>: Remove um arquivo ou pastas com seus arquivos internos.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue alguns links para consulta:<br></h4>
            <h4><small>Função unlink():<code> <a href="http://php.net/manual/pt_BR/function.unlink.php" target="_blank">http://php.net/manual/pt_BR/function.unlink.php</a></code></small></h4>
            <!-- <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Remover um arquivo.<br>

            <strong>Sintaxe da <code>unlink();</code> </strong><br><br>

            <pre><strong>Remover arquivo</strong>
              <code class="php">
                $filename = "teste.txt";

                //Cria arquivo
                $file = fopen("assets/dir/unlink/". $filename, "w+");

                //Adciona conteudo ao arquivo
                fwrite($file, date("Y-m-d H:i:s"));

                //Fecha o arquivo
                fclose($file);

                echo "Arquivo <strong>$filename</strong> criado com Sucesso! E ";

                //Remove arquivo
                unlink("assets/dir/unlink/". $filename);

                echo "Arquivo <strong>$filename</strong> removido com sucesso!";
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Remover um arquivo</code>:</strong> <br>";

              $filename = "teste.txt";

              //Cria arquivo
              $file = fopen("assets/dir/unlink/". $filename, "w+");

              //Adciona conteudo ao arquivo
              fwrite($file, date("Y-m-d H:i:s"));

              //Fecha o arquivo
              fclose($file);

              echo "Arquivo <strong>$filename</strong> criado com Sucesso! E ";

              //Remove arquivo
              unlink("assets/dir/unlink/". $filename);

              echo "Arquivo <strong>$filename</strong> removido com sucesso!";
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Ler pasta e apagar arquivos dentro da pasta</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Ler pasta e apagar arquivos dentro da pasta.<br>

            <strong>Sintaxe da <code>unlink();</code> </strong><br><br>

            <pre><strong>Ler pasta e apagar arquivos dentro da pasta</strong>
              <code class="php">
                $nomePasta = "images";

                //Verifica se o diretório existe ou não e cria o diretório
                if (!is_dir('assets/dir/unlink/'. $nomePasta)) mkdir('assets/dir/unlink/'. $nomePasta);
                echo "Pasta <strong>$nomePasta</strong> criado com sucesso!";

                foreach (scandir('assets/dir/unlink/'. $nomePasta) as $item) {
                  //Remove o ponto e 2 pontos que vem no array
                  if (!in_array($item, array(".", ".."))) {
                    //Apaga arquivo por arquivo
                    unlink("assets/dir/unlink/". $nomePasta. "/". $item);
                  }
                }

                echo "Arquivos da pasta <strong>$nomePasta</strong> deletado com Sucesso!";
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Criar pasta</code>:</strong> <br>";
              
              $nomePasta = "images";

              //Verifica se o diretório existe ou não
              // if (!is_dir('assets/dir/unlink/'. $nomePasta)) {
              //   //Cria o diretório
              //   mkdir('assets/dir/unlink/'. $nomePasta);
              //   echo "Pasta <strong>$nomePasta</strong> criado com sucesso!";
              // }else{
              //   echo "Já existe o diretório: <strong>$nomePasta</strong>!";
              // }

              //Verifica se o diretório existe ou não e cria o diretório
              if (!is_dir('assets/dir/unlink/'. $nomePasta)) mkdir('assets/dir/unlink/'. $nomePasta);
              echo "Pasta <strong>$nomePasta</strong> criado com sucesso!<br><br>";

              echo "<strong>Resultado <code>Ler pasta e deletar arquivos dentro da pasta</code>:</strong> <br>";

              foreach (scandir('assets/dir/unlink/'. $nomePasta) as $item) {
                //Remove o ponto e 2 pontos que vem no array
                if (!in_array($item, array(".", ".."))) {
                  //Apaga arquivo por arquivo
                  unlink("assets/dir/unlink/". $nomePasta. "/". $item);
                }
              }

              echo "Arquivos da pasta <strong>$nomePasta</strong> deletado com Sucesso!";
              
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