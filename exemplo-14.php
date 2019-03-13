<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Estruturas de Controle e Laços de repetição";
  $tituloAula = "Laços de repetição - While | Do While";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>While</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// A diferencia básica do <code>While</code> e <code>Do While</code>, é que o <code>Do While</code> executa pelo menos uma vez.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Enquanto a <code>$condicao = true</code>, <code>While</code> vai continuar repetindo o codigo.<br>';

        /////////////////// While //////////////////
        echo "<strong>Sintaxe do While: </strong> <br>";

        echo '<code>$condicao = true;</code><br><br>';

        echo '<code>while ($condicao) {</code><br>';

        echo '<code>$numero = rand(1, 10);</code><br><br>';

        echo '<code>if ($numero === 3){</code><br>';
        echo '<code>echo " TRÊS_";</code><br>';
        echo '<code>$condicao = false;<br>}</code><br>';

        echo '<code>echo $numero. " | ";<br>}</code><br>';

        echo "<strong>Resultado do Número Sorteado:</strong><br>";

        $condicao = true;

        while ($condicao) {

          $numero = rand(1, 10);

          if ($numero === 3) {
            echo " TRÊS_";
            $condicao = false;
          }

          echo $numero. " | ";
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Do While</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Qualquer compra acima de 100,00 com 10% de desconto.<br>';

        /////////////////// Do While //////////////////
        echo "<strong>Sintaxe do Do While: </strong> <br>";

        echo '<code>$total = 150;</code><br>';
        echo '<code>$desconto = 0.9;</code><br><br>';

        echo '<code>do {</code><br>';

        echo '<code>$total *= $desconto;<br>}</code> ';

        echo '<code>while ($total > 100);</code><br>';

        echo "<strong>Resultado:</strong><br>";

        $total = 150;
        $desconto = 0.9;

        do {
          $total *= $desconto;
        } while ($total > 100);

        echo $total;

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->