<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Usando Cookies";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
<h4>Exemplos</h4>

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando Cookies</div>
  <div class="panel-body">

    <h3>
      <small>// <code>setcookie()</code>: A função <code>setcookie()</code> define um cookie para ser enviado juntamente com o resto dos cabeçalhos HTTP. Como outros cabeçalhos (headers), os cookies devem ser enviados antes de qualquer saída do seu script (isso é uma restrição do protocolo). O que quer dizer que você deve colocar chamadas a essa função antes de qualquer saída, incluindo as tags <html> e <head> e também espaços em branco.<br>
      </small>
    </h3>

    <!-- Documentação -->
    <h4>Segue links para consulta:<br></h4>
      <h4><small>setcookie:<code> <a href="http://php.net/manual/pt_BR/function.setcookie.php" target="_blank">http://php.net/manual/pt_BR/function.setcookie.php</a></code></small><br>
    </h4>

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Criar cookie.<br>

      <strong>Sintaxe da <code>setcookie();</code> </strong><br><br>

      <pre><strong>Cookie</strong>
        <code class="php">
          //Colocar antes das Tags HTML
          // Inicia o buffer de saída
          ob_start();

          $data = array("Empresa"=>"Hcode Treinamentos");

          //Define o cookie
          setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

          echo "OK";
        </code>
      </pre>

      <?php

        echo "<strong>Resultado <code>setcookie()</code>:</strong><br>";

        $data = array("Empresa"=>"Hcode Treinamentos");

        //Define o cookie
        setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

        echo "OK";
        
        echo "<br><br>";
      ?>
    </div> <!-- End: .well well-sm -->
  </div> <!-- End: .panel-body -->
</div> <!-- End: .panel panel-primary -->
<!-- END: .panel -->

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading"><a href="" id="tiposBasicos"></a>Recuperando Cookies</div>
  <div class="panel-body">

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Recupera Cookie.<br>

      <strong>Sintaxe da <code>rename();</code> </strong><br><br>

      <pre><strong>Recupera Cookie</strong>
        <code class="php">
          if (isset($_COOKIE["NOME_DO_COOKIE"])) {
            //Verifica o que tem dentro do cookie no caso uma string formatada em JSON
            var_dump($_COOKIE["NOME_DO_COOKIE"]);

            //Converte de JSON para ARRAY
            var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));

            //Converte de JSON para OBJETO
            var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

            //Acessando valores do objeto
            $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

            echo $obj->Empresa;

          }
        </code>
      </pre>

      <?php

        echo "<strong>Resultado <code>setcookie()</code>:</strong><br>";

        if (isset($_COOKIE["NOME_DO_COOKIE"])) {
          //Verifica o que tem dentro do cookie no caso uma string formatada em JSON
          var_dump($_COOKIE["NOME_DO_COOKIE"]);

          echo "<br><br><strong>Resultado <code>Converte de JSON para ARRAY</code>:</strong><br>";

          //Converte de JSON para ARRAY
          var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));

          echo "<br><br><strong>Resultado <code>Converte de JSON para OBJETO</code>:</strong><br>";

          //Converte de JSON para OBJETO
          var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

          echo "<br><br><strong>Resultado <code>Acessando valores do objeto</code>:</strong><br>";

          //Acessando valores do objeto
          $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

          echo $obj->Empresa;

        }
        
        echo "<br><br>";
      ?>
    </div> <!-- End: .well well-sm -->
  </div> <!-- End: .panel-body -->
</div> <!-- End: .panel panel-primary -->
<!-- END: .panel -->

<!-- END: Exemplos -->