<?php
  $tituloModulo = "Manipulando Arquivos";
  $tituloAula = "Usando a cURL";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
<h4>Exemplos</h4>

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando a cURL</div>
  <div class="panel-body">

    <h3>
      <small>// <code>cURL()</code>: È uma biblioteca que permite que nosso sistema PHP converse com outros sistemas remotos.<br>
      </small>
    </h3>

    <!-- Documentação -->
    <h4>Segue links para consulta:<br></h4>
      <h4><small>Web Service ViaCep:<code> <a href="https://viacep.com.br/" target="_blank">https://viacep.com.br/</a></code></small><br>
    </h4>

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Verificar CEP utilizando a biblioteca cURL.<br>

      <strong>Sintaxe da <code>rename();</code> </strong><br><br>

      <pre><strong>Movendo arquivo</strong>
        <code class="php">
          $cep = "62050840";
          $link = "https://viacep.com.br/ws/$cep/json/";

          $ch = curl_init($link);

          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

          //Essa opção não vai validar se existir o SSL se está registrado em algum orgão certificadora 
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

          //Pegando a resposta
          $response = curl_exec($ch);

          //Fecha a conexão
          curl_close($ch);

          //Transforma o JSON em Array
          $data = json_decode($response, true);

          print_r($data);

          print_r($data["localidade"]);
        </code>
      </pre>

      <?php

        echo "<strong>Resultado <code>cURL()</code>:</strong><br>";

        $cep = "62050840";
        $link = "https://viacep.com.br/ws/$cep/json/";

        //Inicia a Biblioteca cURL
        $ch = curl_init($link);

        //Envia e informa que quer um retorno
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //Essa opção não vai validar se existir o SSL se está registrado em algum orgão certificadora 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        //Pegando a resposta
        $response = curl_exec($ch);

        //Fecha a conexão
        curl_close($ch);

        //Transforma o JSON em Array
        $data = json_decode($response, true);

        print_r($data);

        echo "<br><br><strong>Resultado <code>cURL() com a cheve especifica [\"localidade\"]</code>:</strong><br>";

        print_r($data["localidade"]);
        
        echo "<br><br>";
      ?>
    </div> <!-- End: .well well-sm -->
  </div> <!-- End: .panel-body -->
</div> <!-- End: .panel panel-primary -->
<!-- END: .panel -->

<!-- END: Exemplos -->