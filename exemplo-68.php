<?php
  $tituloModulo = "Tratando Erros com Try e Catch";
  $tituloAula = "Tratando erros";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Manipulando cabeçalho de erros</div>
    <div class="panel-body">

      <h2>
        <small>// <code>try{}catch(){}</code>: .<br>
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
                <a href="index.php?pg=exemplo-68&nome=Curso Udemy PHP 7 - Hcode"><button type="button" class="btn btn-primary">Passar valores pela URL</button></a>
                
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