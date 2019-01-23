<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Curso Udemy PHP 7 - Exemplo 70</title>
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

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

        <!-- Menu Pushy -->
        <link rel="stylesheet" href="assets/pushyMenu/css/normalize.css">
        <link rel="stylesheet" href="assets/pushyMenu/css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="assets/pushyMenu/css/pushy.css">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>

        <!-- Begin: Pushy Menu -->
          <?php require_once ("header.php"); ?>
          <?php require_once ("menu.php"); ?>
        <!-- End: Pushy Menu -->

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Begin: Content -->
        <div id="container">
          <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>

          <div class="page-header">
            <h1>Usando imagem existente (GD)</h1>
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

                  <pre><strong>Editando imagem</strong>
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

                  <pre><strong>Download do imagem</strong>
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

            <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>
        </div><!-- End: Content -->

        <?php require_once ("footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <script>hljs.initHighlightingOnLoad();</script>

        <!-- Pushy JS -->
        <script src="assets/pushyMenu/js/pushy.min.js"></script>

    </body>
</html>
