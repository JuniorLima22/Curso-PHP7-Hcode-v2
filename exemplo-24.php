<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Funções em PHP";
  $tituloAula = "Funções no PHP 7 Novidades";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Declaração de Tipos Escalares (Parâmetro)</div>
    <div class="panel-body">
      <?php

      // echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function soma(int ...$valores) {</code><br>';
        echo '<code>return array_sum($valores);<br>}</code><br><br>';

        echo "<strong>Resultado 1:</strong> ";
        echo '<code>echo soma(2, 2);</code> = ';

        function soma(int ...$valores) {

            return array_sum($valores);
        }

        echo soma(2, 2);
        echo "<br>";

        echo "<strong>Resultado 2:</strong> ";
        echo '<code>echo soma(25, 33);</code> = ';

        echo soma(25, 33);
        echo "<br>";

        echo "<strong>Resultado 3:</strong> ";
        echo '<code>echo soma(1.5, 3.2);</code> = ';

        echo soma(1.5, 3.2);
        echo "<br>";

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Declaração de Tipos de Retorno (Parâmetro)</div>
    <div class="panel-body">
      <?php

      // echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir a passagem de Parâmetros dentro da<code>function</code>.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function soma(int ...$valores):string {</code><br>';
        echo '<code>return array_sum($valores);<br>}</code><br><br>';

        echo "<strong>Resultado 1:</strong> ";
        echo '<code>echo var_dump(soma1(2, 2));</code> = ';

        function soma1(int ...$valores):string {

            return array_sum($valores);
        }

        echo var_dump(soma1(2, 2));
        echo "<br>";

        echo "<strong>Resultado 2:</strong> ";
        echo '<code>echo soma(25, 33);</code> = ';

        echo soma1(25, 33);
        echo "<br>";

        echo "<strong>Resultado 3:</strong> ";
        echo '<code>echo soma(1.5, 3.2);</code> = ';

        echo soma1(1.5, 3.2);
        echo "<br>";

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->