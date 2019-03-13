<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Data e Hora no PHP";
  $tituloAula = "Classe DateTime";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Classe DateTime</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>new</code>: Instânciar uma Classe.<br></small></h3>';          
      echo '<h3><small>// <code>-></code>: Para acessar um método da Classe.<br></small></h3>';
      echo '<h3><small>// <code>format()</code>: è um método da Classe DateTime.<br></small></h3>';
      echo '<h3><small>// <code>DateInterval()</code>: è uma Classe que guarda intervalos de periódo de Datas.<br></small></h3>';
      echo '<h3><small>// <code>add()</code>: è um método da Classe DateTime para Adcionar uma Data.<br></small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir Classe <code>DateTime</code>.<br>";

        /////////////////// Classe DateTime //////////////////
        echo "<strong>Sintaxe da <code>DateTime()</code>: </strong> <br><br>";

        echo '<code>$dt = new DateTime();</code><br><br>';
        echo '<code>echo $dt->format("d/m/Y H:i:s");</code><br><br>';

        echo "<strong>Resultado 1:</strong> ";

        $dt = new DateTime();

        echo $dt->format("d/m/Y H:i:s");

        echo "<br>";
      echo "</div>";

      ?>
    </div>

    <div class="panel-body">
      <?php

      echo '<h3><small>// Classe DateTime com a Classe DateInterval.<br></small></h3>';          
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir Classe <code>DateTime</code> com a Classe <code>DateInterval</code> somando 15 dias.<br>";

        /////////////////// Classe DateTime e Classe DateIntervsal //////////////////
        echo "<strong>Sintaxe da <code>DateTime()</code>: </strong> <br><br>";

        echo '<code>$dt = new DateTime();</code><br><br>';
        echo '<code>$periodo = new DateInterval("P15D");</code><br><br>';
        echo '<code>echo $dt->format("d/m/Y H:i:s");</code><br><br>';
        echo '<code>$dt->add($periodo);</code><br><br>';
        echo '<code>echo $dt->format("d/m/Y H:i:s");</code><br><br>';

        echo "<strong>Resultado 1:</strong>";

        $dt = new DateTime();

        $periodo = new DateInterval("P15D");

        echo $dt->format("d/m/Y H:i:s");

        $dt->add($periodo);

        echo "<br>";

        echo "<strong>Resultado 2:</strong>";

        echo $dt->format("d/m/Y H:i:s");

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->