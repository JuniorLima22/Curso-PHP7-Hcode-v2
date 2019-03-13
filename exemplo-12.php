<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Estruturas de Controle e Laços de repetição";
  $tituloAula = "Laços de repetição - For";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>For</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// O <code>for</code> é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições que devem ser executadas.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$i vá de 0 até < 10</code> <br>';

        /////////////////// For //////////////////
        echo "<strong>Sintaxe do For: </strong> <br>";

        echo '<code>for ($i = 0; $i < 10; $i++) {</code><br>';

        echo "<code>echo = ". '$i'. ". ". '",  ";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong> ";

        for ($i = 0; $i < 10; $i++) {
        	echo $i. ", ";
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>For</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$i vá de 0 até 1000 sendo de 5 em 5.</code> <br>';

        /////////////////// For //////////////////
        echo "<strong>Sintaxe do For: </strong> <br>";

        echo '<code>for ($i = 0; $i < 1000; $i += 5) {</code><br>';

        echo "<code>echo = ". '$i'. ". ". '",  ";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong> ";

        for ($i = 0; $i <= 1000; $i += 5) {
        	echo $i. ", ";
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>For com If</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$i vá de 0 até 1000 sendo de 5 em 5, porém do 200 ao 800 não imprima na tela e quando chegar no 900 termina o For.</code> <br>';

        /////////////////// For com If //////////////////
        echo "<strong>Sintaxe do For com If: </strong> <br>";

        echo '<code>for ($i = 0; $i < 1000; $i += 5) {</code><br>';

        echo '<code>if ($i >= 200 && $i <= 800) continue;</code><br>';

        echo '<code>if ($i === 900) break;</code><br>';

        echo "<code>echo = ". '$i'. ". ". '",  ";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong> ";

        for ($i = 0; $i <= 1000; $i += 5) {

        	if ($i >= 200 && $i <= 800) continue;

        	if ($i === 900) break;

        	echo $i. ", ";
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>For (LOOP)</div>
    <div class="panel-body">
      <?php

      // Exemplo Loop Infinito
      echo '<h4>Exemplo Loop Infinito:<small><code> <a href="exemplo-12.1.php" target="_blank">RUN</a> </code></small></h4>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$i vá de 0 até < 10</code> <br>';

        /////////////////// For //////////////////
        echo "<strong>Sintaxe do For: </strong> <br>";

        echo '<code>for ($i = 0; $i < 10; $i--) {</code><br>';

        echo "<code>echo = ". '$i'. ". ". '",  ";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong> ";

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>For (Exemplo Ano)</div>
    <div class="panel-body">
      <?php

      // echo '<h3><small>// O <code>for</code> é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições que devem ser executadas.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$i = Ano atual, regride até 100 anos</code> <br>';

        /////////////////// For //////////////////
        echo "<strong>Sintaxe do For: </strong> <br>";

        echo '<code>for ($i = date("Y"); $i >= date("Y")-100; $i--) {</code><br>';

        echo "<code>echo = ". '$i'. ". ". '",  ";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong> ";

        for ($i = date("Y"); $i >= date("Y")-100; $i--) {
          echo $i. ", ";
        }

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>For (Exemplo com <code>SELECT</code> )</div>
    <div class="panel-body">
      <?php

      // echo '<h3><small>// O <code>for</code> é a estrutura de repetição do PHP que utilizamos quando sabemos a quantidade de repetições que devem ser executadas.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$i = Ano atual, regride até 100 anos</code> <br>';

        /////////////////// For com SELECT //////////////////
        echo "<strong>Sintaxe do For: </strong> <br>";

        echo '<code>for ($i = date("Y"); $i >= date("Y")-100; $i--) {</code><br>';

        echo "<code>echo = ". '$i'. ". ". '",  ";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong><br> ";

        echo '<select class="form-control">';

          for ($i = date("Y"); $i >= date("Y")-100; $i--) {
            
            echo '<option value="'.$i.'">'.$i.'</option>';
          }

        echo '</select>';

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->