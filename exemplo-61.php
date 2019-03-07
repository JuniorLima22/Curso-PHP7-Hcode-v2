<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Lendo conteúdo de arquivos";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Lendo conteúdo de arquivos</div>
    <div class="panel-body">

      <h3>
        <small>// <code>fgets() e fread()</code>: A única diferencia é que o <code>fgets()</code> ele ler linha por linha de um arquivo e <code>fread()</code> você precisa passar quantos bytes quer ler do arquivo.<br>
        </small>
      </h3>

      <!-- Documentação -->
      <h4>Segue alguns links para consulta:<br></h4>
        <h4><small>Função fgets():<code> <a href="http://php.net/manual/pt_BR/function.fgets.php" target="_blank">http://php.net/manual/pt_BR/function.fgets.php</a></code></small></h4>
        <h4><small>Função fread():<code> <a href="http://php.net/manual/pt_BR/function.fread.php" target="_blank">http://php.net/manual/pt_BR/function.fread.php</a></code></small></h4><br>

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Ler conteúdo de um arquivo.<br>

        <strong>Sintaxe da <code>fgets();</code> </strong><br><br>

        <pre><strong>Lendo arquivo</strong>
          <code class="php">
            $filename = "assets/dir/fgets/tb_usuarios_dois.csv";

            //Verifica se existe
            if (file_exists($filename)) {

              //Ler o arquivo
              $file = fopen($filename, "r");

              //Pega o cabeçalho da tabela
              //explode() tira o separador no caso a virgula
              $headers = explode(",", fgets($file));

              var_dump($headers);
            }
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>Ler conteúdo de um arquivo</code>:</strong> <br>";

          $filename = "assets/dir/fgets/tb_usuarios_dois.csv";

          //Verifica se existe
          if (file_exists($filename)) {

            //Ler o arquivo
            $file = fopen($filename, "r");

            //Pega o cabeçalho da tabela
            //explode() tira o separador no caso a virgula
            $headers = explode(",", fgets($file));

            var_dump($headers);
          }
          
          echo "<br><br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Importa do arquivo CSV para PHP</div>
    <div class="panel-body">

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Ler conteúdo completo de um arquivo.<br>

        <strong>Sintaxe da <code>fgets();</code> </strong><br><br>

        <pre><strong>Lendo arquivo</strong>
          <code class="php">
          $filename = "assets/dir/fgets/tb_usuarios_dois.csv";

          //Verifica se existe
          if (file_exists($filename)) {

            //Ler o arquivo
            $file = fopen($filename, "r");

            //Exibe o cabeçalho da tabela
            //explode() tira o separador no caso a virgula
            $headers = explode(",", fgets($file));

            //Exibe array na tela
            // var_dump($headers);

            $data = array();

            //exibe todas as linhas do arquivo
            while ($row = fgets($file)) {
              //Exibe $row na tela
              // var_dump(explode(",", $row));

              $rowData = explode(",", $row);
              $linha = array();

              //Conta quantos items tem no array $headers "Cabeçalho"
              //Importa do arquivo CSV para PHP
              for ($i = 0; $i < count($headers); $i++) {
                $linha[$headers[$i]] = $rowData[$i];
              }

              array_push($data, $linha);
            }

            //Fecha arquivo
            fclose($file);

            echo json_encode($data);
          }
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>Ler conteúdo completo de um arquivo</code>:</strong> <br>";

          $filename = "assets/dir/fgets/tb_usuarios_dois.csv";

          //Verifica se existe
          if (file_exists($filename)) {

            //Ler o arquivo
            $file = fopen($filename, "r");

            //Exibe o cabeçalho da tabela
            //explode() tira o separador no caso a virgula
            $headers = explode(",", fgets($file));

            //Exibe array na tela
            // var_dump($headers);

            $data = array();

            //exibe todas as linhas do arquivo
            while ($row = fgets($file)) {
              //Exibe $row na tela
              // var_dump(explode(",", $row));

              $rowData = explode(",", $row);
              $linha = array();

              //Conta quantos items tem no array $headers "Cabeçalho"
              //Importa do arquivo CSV para PHP
              for ($i = 0; $i < count($headers); $i++) {
                $linha[$headers[$i]] = $rowData[$i];
              }

              array_push($data, $linha);
            }

            //Fecha arquivo
            fclose($file);

            echo json_encode($data);
          }
          
          echo "<br><br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Fazendo leitura completa do arquivo (Convertendo Binário em Texto usando Base64)</div>
    <div class="panel-body">

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Ler conteúdo completo de um arquivo binário e converter em texto.<br>

        <strong>Sintaxe da <code>file_get_contents();</code> </strong><br><br>

        <pre><strong>Lendo arquivo</strong>
          <code class="php">
            $filename = "assets/dir/fgets/html5.png";

            //Essa função faz uma leitura completa do arquivo
            //Base64 converte o arquivo Binário em uma String
            $base64 = base64_encode(file_get_contents($filename));

            //Padrão de exibição base64 modo estático
            echo "data:image/png;base64,". $base64;

            echo "<strong>Resultado <code>Ler arquivo completo modo dinâmico</code>:</strong>";

            //Pega o tipo MIME do arquivo
            $fileinfo = new finfo(FILEINFO_MIME_TYPE);

            $mimetype = $fileinfo->file($filename);

            //Padrão de exibição base64 modo dinâmico, pega automaticamente o tipo do arquivo
            echo "data:". $mimetype . ";base64,". $base64;

            echo "<strong>Resultado <code>Ler arquivo completo com hiperlink</code>:</strong>";

            //Padrão de exibição base64 modo dinâmico, pega automaticamente o tipo do arquivo
            $base64encode = "data:". $mimetype . ";base64,". $base64;
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>Ler arquivo completo modo estático</code>:</strong><br>";

          $filename = "assets/dir/fgets/html5.png";

          //Essa função faz uma leitura completa do arquivo
          //Base64 converte o arquivo Binário em uma String
          $base64 = base64_encode(file_get_contents($filename));

          //Padrão de exibição base64 modo estático
          echo "data:image/png;base64,". $base64;

          echo "<br><br><strong>Resultado <code>Ler arquivo completo modo dinâmico</code>:</strong><br>";

          //Pega o tipo MIME do arquivo
          $fileinfo = new finfo(FILEINFO_MIME_TYPE);

          $mimetype = $fileinfo->file($filename);

          //Padrão de exibição base64 modo dinâmico, pega automaticamente o tipo do arquivo
          echo "data:". $mimetype . ";base64,". $base64;

          echo "<br><br><strong>Resultado <code>Ler arquivo completo com hiperlink</code>:</strong><br>";

          //Padrão de exibição base64 modo dinâmico, pega automaticamente o tipo do arquivo
          $base64encode = "data:". $mimetype . ";base64,". $base64;
          
          // echo "<br><br>";
        ?>

        <div class="row">
          <div class="col-sm-6">
            <a href="<?=$base64encode?>" target="_blank">Link para Imagem</a>
          </div>
        </div><!-- row -->

        <br><strong>Resultado <code>do Binário convertido em texto (Imagem renderizado na tela em Base64)</code>:</strong><br><br>
        
        <div class="row">
          <div class="col-sm-6">
            <img src="<?=$base64encode?>">
          </div>
        </div><!-- row -->

      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->