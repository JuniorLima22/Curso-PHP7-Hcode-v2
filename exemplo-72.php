<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Imagens e o PHP usando a Biblioteca GD";
  $tituloAula = "Gerando Thumbnail (GD)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Gerando Thumbnail (GD)</div>
    <div class="panel-body">

      <h2>
        <small>// <code>Grafic Design (GD)</code>: è uma biblioteca de design gráfico pra criação de imagens. È uma biblioteca a parte mais que faz parte do php e pode ser utilizado em outras linguagens de programação. A idéia é gerar imagens dinamicamente<br>
        </small>
      </h2>

      <!-- Documentação -->
      <!-- <h4>Segue links para consulta:<br></h4>
        <h4><small>setcookie:<code> <a href="http://php.net/manual/pt_BR/function.setcookie.php" target="_blank">http://php.net/manual/pt_BR/function.setcookie.php</a></code></small><br>
      </h4> -->

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Gerar uma miniatura de uma imagem.<br>

        <strong>Sintaxe da <code>imagecopyresampled()</code> </strong><br><br>
      </div> <!-- End: .well well-sm -->

        <pre><strong>Visualizando imagem em miniatura</strong>
          <code class="php">
            header("Content-type: image/jpeg");

            $file = "assets/bibliotecaGD/wallpaper.jpg";

            $new_width = 256;
            $new_height = 256;

            //Função que pega o tamanho atual da imagem metodo 2
            list($old_width, $old_height) = getimagesize($file);

            //Carrega a palheta de cores completa
            $new_image = imagecreatetruecolor($new_width, $new_height);

            //Cria uma imagem
            $old_image = imagecreatefromjpeg($file);

            // Função Thumbnail
            imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

            //Gera a imagem JPEG
            imagejpeg($new_image);

            imagedestroy($old_image);
            imagedestroy($new_image);
          </code>
        </pre>

      <div class='well well-sm'>
        <strong>Resultado <code>imagecopyresampled()</code>:</strong><br><br>

        <div id="download"></div>                 
        <?php 
        //Recebe valor da pagina de download do certificado (exemplo-71.2.php)
        if (isset($_GET['m'])) {
          // echo $_GET['m'];
          echo "<br><div class=\"alert alert-info\" role=\"alert\">Download do <strong>Certificado</strong> com sucesso!</div>";
        }                    
        ?>

        <form method="GET">
          <div class="row">
            <div class="col-sm-8">
              <div class="mbr-buttons mbr-buttons--right">
                <a href="exemplo-72.1.php" target="_blank"><button type="button" class="btn btn-primary">Visualizar Thumbnail</button></a>
                <!-- <a href="exemplo-72.2.php"><button type="button" class="btn btn-primary">Download Certificado</button></a>                           -->
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->