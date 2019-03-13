<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Funções em PHP";
  $tituloAula = "Função Anônimas";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função Anônimas</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Função Anônima muito comum no <code>JavaScript</code>. Ela ocorre quando voçê cria uma variável e essa variável recebe uma <code>Função</code>. Essa <code>Função</code> ela é idenficada por quê não tem um nome e basta sua execução sendo dentro de uma variável ou numa execução de comando e também não tem <code>return</code>.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir <code>function</code> Anônima.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function test($callback) {</code><br>';
        echo '<code>//Processo Lento</code><br>';
        echo '<code>$callback();<br>};</code><br><br>';


        echo '<code>test(function(){</code><br>';
        echo '<code>echo "Terminou!";<br>});</code><br>';

        echo "<strong>Resultado 1:</strong> ";

        function test($callback){
          //Processo Lento
          $callback();
        };

        test(function(){
            echo "Terminou!";
        });

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função Anônima</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Colocar a <code>Função</code> dentro de uma variável.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir <code>function</code> Anônima dentro da Variável.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>$fn = function($a){</code><br>';
        echo '<code> var_dump($a);</code><br>';
        echo '<code>};</code><br><br>';


        echo '<code>$fn("Oi");</code><br>';

        echo "<strong>Resultado 1:</strong> ";

        $fn = function($a){
          var_dump($a);
        };

        $fn("Oi");

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->