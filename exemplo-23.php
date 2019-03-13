<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Funções em PHP";
  $tituloAula = "Parâmetros por Valor x por Referência";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros por Valor</div>
    <div class="panel-body">
      <?php

      // echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>$a = 10;</code><br>';
        echo '<code>function trocaValor($b){</code><br>';
        echo '<code>$b += 50;</code><br>';
        echo '<code>return $b;<br>}</code><br>';

        echo '<code>echo trocaValor($a);</code><br>';
        echo '<code>echo $a;</code><br><br>';

        echo "<strong>Resultado 1:</strong> ";
        echo '<code>echo trocaValor($a);</code> = ';

        $a = 10;

        function trocaValor($b) {
          $b += 50;
          return $b;
        }

        echo trocaValor($a);

        echo "<br>";

        echo "<strong>Resultado 2:</strong> ";
        echo '<code>echo $a;</code> = ';

        echo $a;

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros por Referência</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Passar valores por referência significa que será passado para uma determinada função o endereço de memória onde está alocada aquela variável. É usado o carácter "&" antes do parâmetro recebido pela função. No modo comum é passado uma cópia do valor contido na variável..</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>$a = 10;</code><br>';
        echo '<code>function trocaValor(&$b){</code><br>';
        echo '<code>$b += 50;</code><br>';
        echo '<code>return $b;<br>}</code><br>';

        echo '<code>echo trocaValor($a);</code><br>';
        echo '<code>echo trocaValor($a);</code><br>';
        echo '<code>echo $a;</code><br><br>';

        echo "<strong>Resultado 1:</strong> ";
        echo '<code>echo trocaValor($a);</code> = ';

        $a = 10;

        function trocaValor2(&$b) {
          $b += 50;
          return $b;
        }

        echo trocaValor2($a);

        echo "<br>";

        echo "<strong>Resultado 2:</strong> ";
        echo '<code>echo trocaValor($a);</code> = ';

        echo trocaValor2($a);

        echo "<br>";

        echo "<strong>Resultado 3:</strong> ";
        echo '<code>echo $a;</code> = ';

        echo $a;

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros por Referência (Foreach)</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir a passagem de Parâmetros dentro do<code>foreach</code>.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>foreach</code>: </strong> <br><br>";

        echo '<code>$pessoa = array(</code><br>';
        echo "<code>'nome'=>'Júnior Lima',</code><br>";
        echo "<code>'idade'=>27<br>);</code><br><br>";

        echo '<code>foreach ($pessoa as &$value){</code><br>';
        echo '<code>if (gettype($value)'. " === 'integer')". '$value += 10;</code><br>';
        echo '<code>echo $value;</code><br><br>';

        echo "<strong>Resultado:</strong> ";
        echo '<code>print_r($pessoa);</code> = ';

        $pessoa = array(

          'nome'=>'Júnior Lima',
          'idade'=>27

        );

        foreach ($pessoa as &$value){

          if (gettype($value) === 'integer') $value += 10;

          echo $value. '<br';
        };

        print_r($pessoa);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->