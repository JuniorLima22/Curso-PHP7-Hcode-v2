<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Curso Udemy PHP 7 - Exemplo 68</title>
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

          <!-- <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tratando Erros com Try e Catch</a></li>
            <li><a href="#">Tratando Erros com Try e Catch</a></li>
            <li class="active">Try e Catch</li>
          </ol> -->

          <div class="page-header">
            <h1>Processamento de Imagem (GD)</h1>
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
                  Criar e manipular um erro no PHP.<br>

                  <strong>Sintaxe da <code>set_error_handler();</code> </strong><br><br>

                  <pre>
                    <code class="php">
                      //Função Error
                      function error_handler($code, $message, $file, $line){
                        //Converte em JSON
                        echo json_encode(array(
                          "code"=>$code,
                          "message"=>$message,
                          "line"=>$line,
                          "file"=>$file
                        ));
                      }

                      //Mostra ao PHP qual função utilizar
                      set_error_handler("error_handler");

                      //Error
                      echo 100 / 0;
                    </code>
                  </pre>

                  <?php

                    echo "<strong>Resultado <code>set_error_handler()</code>:</strong><br>";

                    //Função Error
                    function error_handler($code, $message, $file, $line){
                      //Converte em JSON
                      echo json_encode(array(
                        "code"=>$code,
                        "message"=>$message,
                        "line"=>$line,
                        "file"=>$file
                      ));
                    }

                    //Mostra ao PHP qual função utilizar
                    set_error_handler("error_handler");

                    //Error
                    echo 100 / 0;

                    echo "<br><br>";
                  ?>
                </div> <!-- End: .well well-sm -->
              </div> <!-- End: .panel-body -->
            </div> <!-- End: .panel panel-primary -->
            <!-- END: .panel -->

            <!-- BEGIN: .panel -->
            <div class="panel panel-primary">
              <div class="panel-heading"><a href="" id="tiposBasicos"></a>Ignorando Warning|Notice</div>
              <div class="panel-body">

               <!--  <h2>
                  <small>// <code>finally{}</code>: Como o próprio nome já diz "Finalmente". Idependente dele executar o <code>try</code> ou <code>catch</code> ele sempre vai executar por utimo o bloco <code>finally</code>.<br>
                  </small>
                </h2> -->

                <!-- Documentação -->
                <!-- <h4>Segue links para consulta:<br></h4>
                  <h4><small>setcookie:<code> <a href="http://php.net/manual/pt_BR/function.setcookie.php" target="_blank">http://php.net/manual/pt_BR/function.setcookie.php</a></code></small><br>
                </h4> -->

                <div class='well well-sm'>
                  <strong>Condições: </strong> <br>
                  Ignoranar Warning|Notice.<br>

                  <strong>Sintaxe da <code>error_reporting();</code> </strong><br><br>

                  <pre><strong>error_reporting()</strong>
                    <code class="php">
                      //Se não passar os valores pela URL aparecerá o error
                      //http://localhost/Udemy/PHP/Hcode-PHP-7-v2.0.0/exemplo-68.php?nome=Hcode

                      //Mesmo parâmetros do php.ini
                      error_reporting(E_ALL &~E_NOTICE);

                      $nome = $_GET["nome"];

                      echo $nome;
                    </code>
                  </pre>

                  <form method="POST">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="mbr-buttons mbr-buttons--right">
                          <!-- <input name="revisao" class="mbr-buttons__btn btn btn-primary" type="submit" value="Adcionar valores na URL"> -->
                          <a href="http://localhost/Udemy/PHP/Hcode-PHP-7-v2.0.0/exemplo-68.php?nome=Curso Udemy PHP 7 - Hcode"><button type="button" class="btn btn-primary">Passar valores pela URL</button></a>
                          
                        </div>
                      </div>
                    </div><!-- End: .row -->
                  </form>

                  <?php

                    echo "<strong>Resultado <code>error_reporting()</code>:</strong><br>";

                    //Se não passar os valores pela URL aparecerá o error
                    //http://localhost/Udemy/PHP/Hcode-PHP-7-v2.0.0/exemplo-68.php?nome=Hcode

                    //Mesmo parâmetros do php.ini
                    error_reporting(E_ALL &~E_NOTICE);

                    $nome = $_GET["nome"];

                    echo $nome;
                    
                    echo "<br><br>";
                  ?>
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
