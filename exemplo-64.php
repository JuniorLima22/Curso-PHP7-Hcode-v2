<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Movendo um arquivo";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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