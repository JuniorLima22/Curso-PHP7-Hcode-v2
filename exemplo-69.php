<?php
  $tituloModulo = "Trabalhando com Imagens e o PHP usando a Biblioteca GD";
  $tituloAula = "Processamento de Imagem (GD)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Processamento de Imagem (GD)</div>
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
        Criar uma imagem com PHP.<br>

        <strong>Sintaxe da <code>header();</code> </strong><br><br>

        <pre>
          <code class="php">
            header("Content-Type: image/png");

            //Cria uma imagem e tela
            $image = imagecreate(256, 256);

            //Paleta de cores
            $black = imagecolorallocate($image, 0, 0, 0);
            $red = imagecolorallocate($image, 255, 0, 0);

            //Escrever na tela
            imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

            //Informar o Formato que deve gerar
            imagepng($image);

            //Destruir a variavel
            imagedestroy($image);
          </code>
        </pre>

        <strong>Resultado <code>header()</code>:</strong><br>

        <form method="POST">
          <div class="row">
            <div class="col-sm-8">
              <div class="mbr-buttons mbr-buttons--right">
                <a href="exemplo-69.1.php" target="_blank"><button type="button" class="btn btn-primary">Resultado</button></a>                          
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->