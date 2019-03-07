<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Incluide & Require";
  $tituloAula = "Incluindo arquivos com Include";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>
	
	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Include | Include_Once</div>
    <div class="panel-body">
      <h2>
        <small>
          <code>Include_once:</code> evita o erro do laço(LOOP), quie é incluir um script mais de vez no arquivo.
        </small>
      </h2>

      <?php
      /////////////////// Incluide //////////////////
      echo "<div class='well well-sm'>";

        echo "<strong>Função: </strong> <br>";

        echo '<code>function somar($a, $b){</code><br>';

        echo "<code>return ". '$a + $b;'. "<br>}</code><br>";

        ///////////////////////////////////////////////////////////

        echo "<strong>Pagina a ser Chamada: </strong> <br>";

        echo "<code>include". " ". '"paginaSerIncluida.php"'. "</code> <br>";

        echo "<code>". '$resultado'. " = somar(10, 20): </code>";

        include "exemplo-08.1.php";
        include_once "exemplo-08.1.php";

        $resultado = somar(10, 20);


        echo $resultado;

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- END: Exemplos -->