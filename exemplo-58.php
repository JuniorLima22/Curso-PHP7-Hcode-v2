<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 58</title>

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
        <h1>Lendo e manipulando pastas/diretórios com PHP 7</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Criando e removendo pastas/diretórios</div>
        <div class="panel-body">

          <h3>
            <small>// <code>Gerenciamento de arquivos</code>: É um dos recurso que o PHP sempre teve a disposição, talvez um dos recursos mais utiizados por bons programadores porque isso facilita nosso trabalho.<br>
            </small>
          </h3>

          <h3>
            <small>// <code>O que é Gerenciamento de arquivos</code>: È criar, gerenciar, mover, copiar pastas (diretórios) e arquivos de qualquer formato (Imagens, arquivo de text etc...). Isso facilita muito por um motivo muito simples, bom nos conseguimos utilizar nosso servidor onde está rodando o PHP como um repositório assim facilita algumas tarefas que são naturalmente repetitivas usando as funções de arquivos que o PHP permite utilizar.<br>
            </small>
          </h3>

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar um diretório.<br>

            <strong>Sintaxe da <code>mkdir($nome_diretorio);</code> </strong><br><br>

            <pre><strong>Criar diretório</strong>
              <code class="php">
                $name = "images";

                //Verifica se o diretório existe ou não
                if (!is_dir($name)) {
                  //Cria o diretório
                  mkdir($name);
                  echo "Diretório<strong> $name </strong> criado com sucesso!";
                }else{
                  //Remove diretório
                  rmdir($name);
                  echo "Já existe o diretório: <strong> $name </strong> foi removido!";
                }
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Criar um diretório</code>:</strong> <br>";

              $name = "images";

              //Verifica se o diretório existe ou não
              if (!is_dir('assets/dir/'.$name)) {
                //Cria o diretório
                mkdir('assets/dir/'.$name);
                echo "Diretório <strong>$name</strong> criado com sucesso!";
              }else{
                //Remove diretório
                rmdir('assets/dir/'.$name);
                echo "Já existe o diretório: <strong> $name </strong> foi removido!";
              }
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Scanear e manipulando pastas/diretórios</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Scanear/Ler um diretório.<br>

            <strong>Sintaxe da <code>scandir($nome_diretorio);</code> </strong><br><br>

            <pre><strong>Criar diretório</strong>
              <code class="php">
                $nameDois = "images-dois";

                //Verifica se o diretório existe ou não
                if (!is_dir($nameDois)) {
                  //Cria o diretório
                  mkdir('assets/dir/'. $nameDois);                
                  echo "Diretório<strong> $nameDois </strong> criado com sucesso!";
                }else{
                  //Scanear/Ler um diretório
                  scandir('assets/dir/'. $nameDois);
                  echo "Já existe o diretório: <strong>$nameDois</strong>!";
                }
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Criar um diretório</code>:</strong> <br>";

              $nameDois = "images-dois";

              //Verifica se o diretório existe ou não
              if (!is_dir('assets/dir/'.$nameDois)) {
                //Cria o diretório
                mkdir('assets/dir/'. $nameDois);                
                echo "Diretório<strong> $nameDois </strong> criado com sucesso!";
              }else{
                //Scanear/Ler um diretório
                scandir('assets/dir/'. $nameDois);
                echo "Já existe o diretório: <strong>$nameDois</strong>!";
              }
              
              echo "<br><br>";
            ?>

            <pre><strong>Scanear/Ler diretório</strong>
              <code class="php">
                //Scanear/Ler um diretório
                $images = scandir("assets/dir/images-dois");

                var_dump($images);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Scanear/Ler um diretório</code>:</strong> <br>";

              //Scanear/Ler um diretório
              $images = scandir("assets/dir/images-dois");

              var_dump($images);
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Ler e manipulando pastas/diretórios</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Ler um diretório.<br>

            <strong>Sintaxe da <code>$images = scandir("diretorio");</code> </strong><br><br>

            <pre><strong>Scanear/Ler diretório</strong>
              <code class="php">
                //Scanear/Ler um diretório
                $images = scandir("assets/dir/images-dois");

                var_dump($images);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>var_dump()</code>:</strong> <br>";

              //Scanear/Ler um diretório
              $images = scandir("assets/dir/images-dois");

              foreach ($images as $img){
                //if elimina os pontos que vem no array
                //in_array: Faz uma busca dentro de um Array
                //needle é onde vc tá procurando, haystack são as opções
                if(!in_array($img, array(".", ".."))){
                  $filename = "images-dois". DIRECTORY_SEPARATOR. $img;

                  //Obter informações uteis de um arquivo
                  $info = pathinfo($filename);
                  //Verifica o que tem no $info
                  var_dump($info);
                }
              }
             ?> 
          </div> <!-- End: .well well-sm -->

          <div class='well well-sm'>

            <pre><strong>Ler diretório</strong>
              <code class="php">
                //Ler um diretório
                $images = scandir("assets/dir/images-dois");

                $data = array();

                foreach ($images as $img){
                  //if elimina os pontos que vem no array
                  //in_array: Faz uma busca dentro de um Array
                  //needle é onde vc tá procurando, haystack são as opções
                  if(!in_array($img, array(".", ".."))){
                    $filename = "assets/dir/images-dois". DIRECTORY_SEPARATOR. $img;

                    //Obter informações uteis de um arquivo
                    $info = pathinfo($filename);

                    //Verifica o tamanho do arquivo em bytes
                    $info["size"] = filesize($filename);

                    //Data da ultima modificação do arquivo
                    $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

                    //Acessar o arquivo via URL
                    $info["url"] = "http://localhost/udemy/PHP/Hcode-PHP-7/". str_replace("\\", "/", $filename);

                    //Insere nesse array as informações de outro array para usar no json
                    array_push($data, $info);
                  }
                }
                //O parâmetro JSON_UNESCAPED_SLASHES na função json_encode() corrige as barras
                echo json_encode($data, JSON_UNESCAPED_SLASHES);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>json_encode()</code>:</strong> <br>";

              //Scanear/Ler um diretório
              $images = scandir("assets/dir/images-dois");

              $data = array();

              foreach ($images as $img){
                //if elimina os pontos que vem no array
                //in_array: Faz uma busca ou verifica se um valor existe dentro de um Array
                //needle é onde vc tá procurando, haystack são as opções
                if(!in_array($img, array(".", ".."))){
                  $filename = "assets/dir/images-dois". DIRECTORY_SEPARATOR. $img;

                  //Obter informações uteis de um arquivo
                  $info = pathinfo($filename);

                  //Verifica o tamanho do arquivo em bytes
                  $info["size"] = filesize($filename);

                  //Data da ultima modificação do arquivo
                  $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));

                  //Acessar o arquivo via URL
                  $info["url"] = "http://localhost/udemy/PHP/Hcode-PHP-7/". str_replace("\\", "/", $filename);

                  //Insere nesse array as informações de outro array para usar no json
                  array_push($data, $info);
                }
              }

              //O parâmetro JSON_UNESCAPED_SLASHES na função json_encode() corrige as barras
              echo json_encode($data, JSON_UNESCAPED_SLASHES);
              
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