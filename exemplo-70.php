<?php
  $tituloModulo = "Trabalhando com Imagens e o PHP usando a Biblioteca GD";
  $tituloAula = "Usando imagem existente (GD)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando imagem existente (GD)</div>
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
        Editar uma imagem com PHP.<br>

        <strong>Sintaxe da <code>imagecreatefromjpeg()</code> </strong><br><br>

        <pre><strong>Editando e visualizando imagem</strong>
          <code class="php">
            $image = imagecreatefromjpeg("assets/bibliotecaGD/certificado.jpg");

            //Paleta de cores no formato RGB
            $titleColor = imagecolorallocate($image, 0, 0, 0);
            $gray = imagecolorallocate($image, 100, 100, 100);

            //Escrever na imagem
            imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
            imagestring($image, 5, 440, 350, utf8_decode("Júnior Lima"), $titleColor);
            imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

            //Executar
            header("Content-type: image/jpeg");

            //Função image
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
            imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
            imagestring($image, 5, 440, 350, utf8_decode("Júnior Lima"), $titleColor);
            imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

            //Executar
            header("Content-type: image/jpeg");

            //Função gerar arquivo de imagem
            //Local onde salvar
            $imageSalvar = "assets/bibliotecaGD/";
            imagejpeg($image, "$imageSalvar"."certificado-". date("Y-m-d"). ".jpg");

            //Destroy
            imagedestroy($image);
          </code>
        </pre>

        <strong>Resultado <code>imagecreatefromjpeg()</code>:</strong><br>
        <div id="download"></div>                 
        <?php 
        //Recebe valor da pagina de download do certificado (exemplo-71.2.php)
        if (isset($_GET['m'])) {
          // echo $_GET['m'];
          echo "<br><div class=\"alert alert-info\" role=\"alert\">Download do <strong>Certificado</strong> com sucesso!</div>";
        }                    
        ?>        

        <form method="POST">
          <div class="row">
            <div class="col-sm-8">
              <div class="mbr-buttons mbr-buttons--right">
                <a href="exemplo-70.1.php" target="_blank"><button type="button" class="btn btn-primary">Visualizar Certificado</button></a>
                <a href="exemplo-70.2.php" target="_blank"><button type="button" class="btn btn-primary">Download Certificado</button></a>                          
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->