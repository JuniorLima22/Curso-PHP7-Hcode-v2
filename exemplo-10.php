<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Estruturas de Controle e Laços de repetição";
  $tituloAula = "Estruturas Condicionais - If, Else if, Else";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>If</div>
    <div class="panel-body">
      <?php

      echo '<h4><small>// O <code>if/else</code> é um operador condicional utilizado quando desejamos executar um bloco de código apenas se determinada condição for atendida, por exemplo, exibir um conteúdo apenas se o usuário for menor de idade.</small></h4>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$qualASuaIdade = 10;</code> <br>';
        echo '<code>$idadeCrianca = 12;</code> <br>';
        echo '<code>$idadeMaior = 18;</code> <br>';

        /////////////////// If //////////////////
        echo "<strong>Sintaxe do If: </strong> <br>";

        echo '<code>if ($qualASuaIdade < $idadeCrianca){</code><br>';

        echo "<code>echo = ". '"Criança";'. "<br>}</code><br>";

        echo '<code>else {</code><br>';

        echo "<code>echo = ". '"Adolecente";'. "<br>}</code><br>";


        echo "Resultado: ";

        $qualASuaIdade = 10;

        $idadeCrianca = 12;
        $idadeMaior = 18;

        if ($qualASuaIdade < $idadeCrianca){

        	echo "Criança";
        } else {

        	echo "Adolecente";
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>If, Else if e Else</div>
    <div class="panel-body">
      <?php

      echo '<h4><small>// Além do <code>if/else</code>, existe também a condicional <code>elseif</code> ou <code>else if</code>. Essa opção é utilizada caso seja necessário verificar duas ou mais condições.</small></h4>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$qualASuaIdade = 27;</code> <br>';
        echo '<code>$idadeCrianca = 12;</code> <br>';
        echo '<code>$idadeMaior = 18;</code> <br>';
        echo '<code>$idadeMelhor = 65;</code> <br><hr>';

        /////////////////// If, Else if, Else //////////////////
        echo "<strong>Sintaxe do If, Else if, Else: </strong> <br>";

        echo '<code>if ($qualASuaIdade < $idadeCrianca) {</code><br>';

        echo "<code>echo = ". '"Criança";'. "<br>}</code><br>";

        echo '<code>else if ($qualASuaIdade < $idadeMaior) {</code><br>';

        echo "<code>echo = ". '"Adolecente";'. "<br>}</code><br>";

        echo '<code>elseif ($qualASuaIdade < $idadeMelhor) {</code><br>';

        echo "<code>echo = ". '"Adulto";'. "<br>}</code><br>";

        echo '<code>else {</code><br>';

        echo "<code>echo = ". '"Idoso";'. "<br>}</code><br>";

        echo "<strong>Resultado:</strong> ";

        $qualASuaIdade = 27;

        $idadeCrianca = 12;
        $idadeMaior = 18;
        $idadeMelhor = 65;

        if ($qualASuaIdade < $idadeCrianca) {

        	echo "Criança";

        } else if ($qualASuaIdade < $idadeMaior) {

        	echo "Adolecente";

        } elseif ($qualASuaIdade < $idadeMelhor) {

        	echo "Adulto";

        } else{

        	echo "Idoso";

        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operador ternário - (If de uma Linha só)</div>
    <div class="panel-body">
      <?php

      echo '<h4><small>// Outra estrutura de condição é o operador ternário, o qual também é chamado de <code>if</code> ternário. Em suma, ele é uma versão compacta do <code>if</code>.</small></h4>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$qualASuaIdade = 18;</code> <br>';
        echo '<code>$idadeCrianca = 12;</code> <br>';
        echo '<code>$idadeMaior = 18;</code> <br>';

        /////////////////// If Ternário //////////////////
        echo "<strong>Sintaxe do operador ternário: </strong> <br>";

        echo '<code>echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";</code><br>';


        echo "Resultado: ";

        $qualASuaIdade = 18;

        $idadeCrianca = 12;
        $idadeMaior = 18;

        echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- END: Exemplos -->