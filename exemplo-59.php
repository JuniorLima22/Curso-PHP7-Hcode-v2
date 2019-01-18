<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 59</title>

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
        <h1>Criando arquivos com fopen()</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Criando arquivos com fopen()</div>
        <div class="panel-body">

          <h3>
            <small>// <code>fopen</code>: Abre um arquivo ou URL.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue alguns links para consulta:<br></h4>
            <h4><small>Função fopen():<code> <a href="http://php.net/manual/pt_BR/function.fopen.php" target="_blank">http://php.net/manual/pt_BR/function.fopen.php</a></code></small></h4>
            <!-- <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Criar um arquivo.<br>

            <strong>Sintaxe da <code>fopen();</code> </strong><br><br>

            <pre><strong>Criar arquivo</strong>
              <code class="php">
                //fopen(endereço+nome_arquivo, como vc vai controlar/usar esse arquivo)
                $file = fopen("assets/dir/fopen/log.txt", "w+");

                fwrite($file, date("Y-m-d H:i:s"));

                fclose($file);

                echo "Arquivo criado com Sucesso!";
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Criar um arquivo</code>:</strong> <br>";

              //fopen(endereço+nome_arquivo, como vc vai controlar/usar esse arquivo)
              $file = fopen("assets/dir/fopen/log.txt", "w+");

              fwrite($file, date("Y-m-d H:i:s"));

              fclose($file);

              echo "Arquivo criado com Sucesso!";
              
              echo "<br><br>";
            ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Adcionando conteudo no arquivo com fopen()</div>
        <div class="panel-body">

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Adcionando conteudo no arquivo.<br>

            <strong>Sintaxe da <code>fopen();</code> </strong><br><br>

            <pre><strong>Adcionando conteudo no arquivo</strong>
              <code class="php">
                $url = $_SERVER["SCRIPT_NAME"];

                //fopen(endereço+nome_arquivo, como vc vai controlar/usar essse arquivo)
                $file = fopen("assets/dir/fopen/log2.txt", "a+");

                fwrite($file,$url. " - ".  date("Y-m-d H:i:s"). "\r\n");

                fclose($file);

                echo "Adcionado + conteudo no arquivo com Sucesso!";
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Adcionando conteudo no arquivo</code>:</strong> <br>";
              $url = $_SERVER["SCRIPT_NAME"];

              //fopen(endereço+nome_arquivo, como vc vai controlar/usar essse arquivo)
              $file = fopen("assets/dir/fopen/log2.txt", "a+");

              fwrite($file,$url. " - ". date("Y-m-d H:i:s"). "\r\n");

              fclose($file);

              echo "Adcionado + conteudo no arquivo com Sucesso!";
              
              echo "<br><br>";
            ?>

            <strong>Resultado <code>Arquivo de Texto</code>:</strong> <br>

            <pre><strong>Arquivo de Texto log2.txt</strong>
              <code class="php">
<?php require_once("assets/dir/fopen/log2.txt"); ?>
              </code>
            </pre>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Arquivos CSV para Importar/Exportar para outros Programas</div>
        <div class="panel-body">

          <h3>
            <small>// <code>CSV</code>: CSV é um arquivo formatado, cada coluna (Excel) é um tipo de informação assim como uma tabela no banco de dados, e normalmente são separados (delimitador) por uma virgula, mais pode ser qualquer caracteres.<br>
            </small>
          </h3>

          <!-- Documentação -->
          <h4>Segue alguns links para consulta:<br></h4>
            <h4><small>Corrigindo a acentuação nos arquivos CSV:<code> <a href="https://dadosabertos.camara.leg.br/howtouse/2017-03-02-csv-corrigindo-acentuacao.html" target="_blank">https://dadosabertos.camara.leg.br/howtouse/2017-03-02-csv-corrigindo-acentuacao.html</a></code></small></h4>
            <!-- <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->

          <div class='well well-sm'>
            <strong>Condições: </strong> <br>
            Converter dados da tabela <code>tb_usuarios_dois</code>e exportar para <code>CSV</code>.<br>

            <strong>Sintaxe da <code>fopen();</code> </strong><br><br>

            <pre><strong>Adcionando conteudo no arquivo</strong>
              <code class="php">
                require_once("assets/dir/fopen/config.php");

                $sql = new Sql();

                $usuarios = $sql->select("SELECT * FROM tb_usuarios_dois ORDER BY idusuario");

                // print_r($usuarios);

                //Detecta nome das colunas
                $headers = array ();

                foreach ($usuarios[0] as $key => $value) {
                  array_push($headers, ucfirst($key));
                }

                //Visualiza array da tabela tb_usuarios_dois
                // print_r($headers);

                //Adciona um separador no caso a virgula
                //Função implode(), recebe 2 paramêtros: 1 - uma string, 2 - Array
                echo implode(",", $headers);

                echo "<strong>Resultado <code>Criar um arquivo</code>:</strong>";

                //Adciona o Cabeçalho dentro do arquivo
                $nameFile = "usuarios.csv";

                $file = fopen("assets/dir/fopen/". $nameFile, "w+");

                fwrite($file, implode(",", $headers). "\r\n");

                echo "Criado arquivo <strong>$nameFile</strong> com Sucesso!";

                echo "<strong>Resultado <code>Arquivo CSV</code>:</strong>";

                //Foreach das linhas
                foreach ($usuarios as $row) {
                  $data = array ();

                  //Foreach das colunas das linhas
                  foreach ($row as $key => $value) {
                    array_push($data, $value);
                  }//End: Foreach de coluna

                  //Adciona os dados da linha da tabela no arquivo CSV
                  fwrite($file, implode(",", $data). "\r\n");
                }//End: Foreach de linha

                //Fecha o arquivo
                fclose($file);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>Cabeçalho com separador (,)</code>:</strong> <br>";
              
              require_once("assets/dir/fopen/config.php");

              $sql = new Sql();

              $usuarios = $sql->select("SELECT * FROM tb_usuarios_dois ORDER BY idusuario");

              // print_r($usuarios);

              //Detecta nome das colunas
              $headers = array ();

              foreach ($usuarios[0] as $key => $value) {
                array_push($headers, ucfirst($key));
              }

              //Visualiza array da tabela tb_usuarios_dois
              // print_r($headers);

              //Adciona um separador no caso a virgula
              //Função implode(), recebe 2 paramêtros: 1 - uma string, 2 - Array
              echo implode(",", $headers);

              echo "<br><br>";

              echo "<strong>Resultado <code>Criar um arquivo</code>:</strong> <br>";

              //Adciona o Cabeçalho dentro do arquivo
              $nameFile = "tb_usuarios_dois.csv";

              $file = fopen("assets/dir/fopen/". $nameFile, "w+");

              fwrite($file, implode(",", $headers). "\r\n");

              echo "Criado arquivo <strong>$nameFile</strong> com Sucesso!";

              echo "<br><br>";

              echo "<strong>Resultado <code>Arquivo CSV</code>:</strong> <br>";

              //Foreach das linhas
              foreach ($usuarios as $row) {
                $data = array ();

                //Foreach das colunas das linhas
                foreach ($row as $key => $value) {
                  array_push($data, $value);
                }//End: Foreach de coluna

                //Adciona os dados da linha da tabela no arquivo CSV
                fwrite($file, implode(",", $data). "\r\n");
              }//End: Foreach de linha

              //Fecha o arquivo
              fclose($file);
            ?>

            <pre><strong>Arquivo CSV tb_usuarios_dois.csv</strong>
              <code class="php">
<?php require_once("assets/dir/fopen/tb_usuarios_dois.csv"); ?>
              </code>
            </pre>
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