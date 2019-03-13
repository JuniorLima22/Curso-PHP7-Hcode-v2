<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Estruturas de Controle e Laços de repetição";
  $tituloAula = "Estruturas Condicionais - Swicth Case";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Swicth Case</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// O <code>switch/case</code> é uma estrutura condicional que está presente em várias linguagens de programação. Ela recebe um valor como parâmetro e verifica se ele atende alguma das condições especificadas. Em caso positivo o trecho de código relacionado a essa condição é executado.</small></h3>';

      echo '<h3><small>// Diferente da estrutura <code>if/else</code>, o <code>switch/case</code> avalia apenas condições de igualdade. Ou seja, ela verifica se o valor recebido como parâmetro é igual a alguma das opções especificadas em seu corpo. Esse comportamento equivale à utilização de vários <code>if/else</code> em sequência, porém com uma sintaxe mais enxuta e de fácil leitura.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>$diaDaSemanda = date("w");</code> <br>';

        /////////////////// Swicth Case //////////////////
        echo "<strong>Sintaxe do Swicth Case: </strong> <br>";

        echo '<code>switch ($diaDaSemanda) {</code><br>';

        echo '<code>case 0:</code><br>';

        echo "<code>echo = ". '"Domingo";'. "<br>}</code><br>";

        echo '<code>case 1:</code><br>';

        echo "<code>echo = ". '"Segunda-Feira";'. "<br>}</code><br>";

        echo '<code>case 2:</code><br>';

        echo "<code>echo = ". '"Terça-Feira";'. "<br>}</code><br>";

        echo '<code>case 3:</code><br>';

        echo "<code>echo = ". '"Quarta-Feira";'. "<br>}</code><br>";

        echo '<code>case 4:</code><br>';

        echo "<code>echo = ". '"Quinta-Feira";'. "<br>}</code><br>";

        echo '<code>case 5:</code><br>';

        echo "<code>echo = ". '"Sexta-Feira";'. "<br>}</code><br>";

        echo '<code>case 6:</code><br>';

        echo "<code>echo = ". '"Sábado";'. "<br>}</code><br>";

        echo '<code>default:</code><br>';

        echo "<code>echo = ". '"Data inválida";'. "<br>}</code><br>";


        echo "<strong>Resultado:</strong> ";

        $diaDaSemanda = date("w");

        switch ($diaDaSemanda) {

        	case 0:
        		echo "Domingo";
        		break;

        	case 1:
        		echo "Segunda-Feira";
        		break;

        	case 2:
        		echo "Terça-Feira";
        		break;

        	case 3:
        		echo "Quarta-Feira";
        		break;

        	case 4:
        		echo "Quinta-Feira";
        		break;

        	case 5:
        		echo "Sexta-Feira";
        		break;

        	case 6:
        		echo "Sábado";
        		break;

        	default:
        		echo "Data inválida";
        		break;
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- END: Exemplos -->