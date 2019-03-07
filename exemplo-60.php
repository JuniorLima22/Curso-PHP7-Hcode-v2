<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Excluindo arquivos";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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