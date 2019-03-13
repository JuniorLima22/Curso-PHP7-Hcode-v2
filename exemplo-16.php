<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Arrays em PHP";
  $tituloAula = "JSON (JavaScript Object Notation)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>JSON_ENCODE (Gerar um JSON do Array)</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>JSON</code> - (<code>JavaScript Object Notation</code>), é uma notação criada básicamente pro <code>JavaSript</code> que tomou todo o universo da programação. Ela gera um arquivo no formato de comunicação que facilita a integração de sistemas (Interoperatividade de Sistemas), criado por Douglas Crockford em 2000. O <code>JSON</code> é ultilizado praticamente em todas as linguagens e ele tem tudo a ver com <code>ARRAYS</code>.</small></h3>';

        $pessoas = array();

        array_push($pessoas, array(
          'nome' => 'Junior Lima',
          'idade' => 27
        ));

        array_push($pessoas, array(
          'nome' => 'Michael Christian',
          'idade' => 3
        ));

        // print_r($pessoas);
        // echo json_encode($pessoas);
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Gerar o <code>json_encode</code> da váriavel <code>$pessoas</code>.<br>';

        /////////////////// Array Bidimensional //////////////////
        echo "<strong>Sintaxe do JSON_ENCODE: </strong> <br>";

        echo '<code>$pessoas = array();</code><br>';
        echo '<code>array_push($pessoas, array(</code><br>';
        echo "<code>'nome' => 'Júnior Lima',</code><br>";
        echo "<code>'idade' => 27</code><br>";
        echo "<code>));</code><br><br>";

        echo '<code>array_push($pessoas, array(</code><br>';
        echo "<code>'nome' => 'Michael Christian',</code><br>";
        echo "<code>'idade' => 3</code><br>";
        echo "<code>));</code><br><br>";

        echo "<strong>Resultado:</strong><br>";
        echo '<code>echo json_encode($pessoas);</code> = ';
        echo json_encode($pessoas);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>JSON_DECODE (Gerar um Array do JSON)</div>
    <div class="panel-body">
      <?php

        $json = '[{"nome":"Junior Lima","idade":27},{"nome":"Michael Christian","idade":3}]';

        $data = json_decode($json, true);

        // var_dump($data);
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Exibir <code>Array</code> do <code>JSON</code>.<br>';

        /////////////////// Array Bidimensional //////////////////
        echo "<strong>Sintaxe do JSON_DECODE: </strong> <br>";

        echo '<code>$json = [{"nome":"Junior Lima","idade":27},{"nome":"Michael Christian","idade":3}];</code><br>';

        echo '<code>$data = json_decode($json, true);</code><br>';

        echo '<code>var_dump($data);</code><br>';

        echo "<strong>Resultado:</strong><br>";
        var_dump($data);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->