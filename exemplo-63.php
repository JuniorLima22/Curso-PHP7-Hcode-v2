<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Download de arquivos com file_get_contents";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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