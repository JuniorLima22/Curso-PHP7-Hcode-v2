<?php
  $tituloModulo = "Tratando Erros com Try e Catch";
  $tituloAula = "Try e Catch";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Try e Catch</div>
    <div class="panel-body">

      <h3>
        <small>// <code>try{}catch(){}</code>: .<br>
        </small>
      </h3>

      <!-- Documentação -->
      <!-- <h4>Segue links para consulta:<br></h4>
        <h4><small>setcookie:<code> <a href="http://php.net/manual/pt_BR/function.setcookie.php" target="_blank">http://php.net/manual/pt_BR/function.setcookie.php</a></code></small><br>
      </h4> -->

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar um erro no PHP.<br>

        <strong>Sintaxe da <code>try{}catch(){};</code> </strong><br><br>

        <pre><strong>Try e Cacth</strong>
          <code class="php">
            try {
              throw new Exception("Houve um erro.", 400);
              
            } catch (Exception $e) {
              echo json_encode(array(
                "message"=>$e->getMessage(),
                "line"=>$e->getLine(),
                "file"=>$e->getFile(),
                "code"=>$e->getCode()
              ));
            }
          </code>
        </pre>

        <?php

          echo "<strong>Resultado <code>try{}catch(){}</code>:</strong><br>";

          try {
            throw new Exception("Houve um erro.", 400);
            
          } catch (Exception $e) {
            echo json_encode(array(
              "message"=>$e->getMessage(),
              "line"=>$e->getLine(),
              "file"=>$e->getFile(),
              "code"=>$e->getCode()
            ));
          }
          
          echo "<br><br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Try e Catch</div>
    <div class="panel-body">

      <h3>
        <small>// <code>finally{}</code>: Como o próprio nome já diz "Finalmente". Idependente dele executar o <code>try</code> ou <code>catch</code> ele sempre vai executar por utimo o bloco <code>finally</code>.<br>
        </small>
      </h3>

      <!-- Documentação -->
      <!-- <h4>Segue links para consulta:<br></h4>
        <h4><small>setcookie:<code> <a href="http://php.net/manual/pt_BR/function.setcookie.php" target="_blank">http://php.net/manual/pt_BR/function.setcookie.php</a></code></small><br>
      </h4> -->

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar um erro em tempo de execução.<br>

        <strong>Sintaxe da <code>try{}catch(){};</code> </strong><br><br>

        <pre><strong>Try e Cacth</strong>
          <code class="php">
            try {
              throw new Exception("Houve um erro.", 400);
              
            } catch (Exception $e) {
              echo json_encode(array(
                "message"=>$e->getMessage(),
                "line"=>$e->getLine(),
                "file"=>$e->getFile(),
                "code"=>$e->getCode()
              ));
            }
          </code>
        </pre>

        <?php

          echo "<strong>Resultado <code>try{}catch(){}</code>:</strong><br>";

          function trataNome($name){
            if (!$name) {
              throw new Exception("Nenhum nome foi informado.", 1);
            }

            echo ucfirst($name). "<br>";
          }

          try {
            trataNome("Junior");
            trataNome("");

          } catch(Exception $e){
            echo $e->getMessage();
          } finally {
            echo " E executado o Try!";
          }
          
          echo "<br><br>";
        ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->