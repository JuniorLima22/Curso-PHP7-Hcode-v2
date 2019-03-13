<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Incluide & Require";
  $tituloAula = "Incluindo arquivos com Require";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Require || Require_Once</div>
    <div class="panel-body">
      <?php

      echo '<h4><small>// Require exige que o arquivo exista e que esteja funcionando corretamente.</small></h4>';

      echo '<h4><small>// A declaração require é idêntica a include exceto que em caso de falha também produzirá um erro fatal de nível E_COMPILE_ERROR. Em outras palavras, ele parará o script enquanto que o include apenas emitirá um alerta (E_WARNING) permitindo que o script continue.</small></h4>';

      echo '<h4><small>// Require_once evita o erro do laço(LOOP), quie é incluir um script mais de vez no arquivo.</small></h4>';

      /////////////////// Require //////////////////
      echo "<div class='well well-sm'>";

        echo "<strong>Função: </strong> <br>";

        echo '<code>function somar($a, $b){</code><br>';

        echo "<code>return ". '$a + $b;'. "<br>}</code><br>";

        ///////////////////////////////////////////////////////////

        echo "<strong>Pagina a ser Chamada: </strong> <br>";

        echo "<code>require". " ". '"paginaSerIncluida.php"'. "</code> <br>";

        echo "<code>". '$resultado'. " = somar(10, 20): </code>";

        require "exemplo-08.1.php";

        $resultado = somar(10, 20);


        echo $resultado;

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- END: Exemplos -->