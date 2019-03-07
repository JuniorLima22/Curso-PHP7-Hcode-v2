<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Criando arquivos com fopen()";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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