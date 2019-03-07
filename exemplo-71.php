<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Imagens e o PHP usando a Biblioteca GD";
  $tituloAula = "Fontes TTF (GD)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Fontes TTF (GD)</div>
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
        Utilizar fontes externas.<br>

        <strong>Sintaxe da <code>imagettftext()</code> </strong><br><br>

        <pre><strong>Editando e visualizando imagem</strong>
          <code class="php">
             $image = imagecreatefromjpeg("assets/bibliotecaGD/certificado.jpg");

            //Paleta de cores no formato RGB
            $titleColor = imagecolorallocate($image, 0, 0, 0);
            $gray = imagecolorallocate($image, 100, 100, 100);

            //Escrever na imagem
            imagettftext($image, 32, 0, 450, 150, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD"
            .DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
           
            imagettftext($image, 32, 0, 440, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD"
            .DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Júnior Lima");
            
            imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y - H:i:s"), $titleColor);

            //Executar
            header("Content-type: image/jpeg");

            //Função exibe a imagem na tela
            imagejpeg($image);

            //Destroy
            imagedestroy($image);
          </code>
        </pre>

        <pre><strong>Download da imagem</strong>
          <code class="php">
              $image = imagecreatefromjpeg("assets/bibliotecaGD/certificado.jpg");

              //Paleta de cores no formato RGB
              $titleColor = imagecolorallocate($image, 0, 0, 0);
              $gray = imagecolorallocate($image, 100, 100, 100);

              //Escrever na imagem
              imagettftext($image, 32, 0, 450, 150, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD"
              .DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
             
              imagettftext($image, 32, 0, 440, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD"
              .DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Júnior Lima");
              
              imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y - H:i:s"), $titleColor);

              //Executar
              header("Content-type: image/jpeg");
               
              //Local onde salvar
              $imageSalvar = "assets/bibliotecaGD/";

              //Função gerar arquivo de imagem
              imagejpeg($image, "$imageSalvar"."certificado-". date("Y-m-d__H.i.s"). ".jpg");

              //Destroy
              imagedestroy($image);

              header("Location: exemplo-71.php?m=download&#download");
          </code>
        </pre>

        <strong>Resultado <code>imagettftext()</code>:</strong><br>

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
                <a href="exemplo-71.1.php" target="_blank"><button type="button" class="btn btn-primary">Visualizar Certificado</button></a>
                <a href="exemplo-71.2.php"><button type="button" class="btn btn-primary">Download Certificado</button></a>                          
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->