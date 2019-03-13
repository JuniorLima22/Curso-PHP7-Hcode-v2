<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Sessão no PHP";
  $tituloAula = "ID Sessões";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>ID Sessões</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>ID Session</code> é uma Identificação da sua Sessão unica no Servidor.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir ID da  <code>". '$_SESSION'. "</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

        echo '<code>session_start();</code><br>';
        echo '<code>$_SESSION["nome"] = "Júnior Lima";</code><br><br>';

        echo "<strong>Resultado:</strong> ";
        echo '<code>echo $_SESSION['."'nome'".'];</code> = ';

        // session_start();

        $_SESSION["nome"] = "Júnior Lima";

        echo $_SESSION['nome'];

        echo "<br>";

        echo "<strong>ID da Sessão:</strong> ";
        echo '<code>echo session_id();</code> = ';

        echo session_id();

      echo "</div>";

      // Documentação
      echo '<h4>Forçar a criar uma nova ID de Sessões via Programação:<small><code> <a href="exemplo-19.1.php" target="_blank">exemplo-19.1.php</a> </code></small></h4>';

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Sessão</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Criar um <code>Array</code> da  <code>". '$_SESSION'. "</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

        echo '<code>session_start();</code><br>';
        echo '<code>$_SESSION["nome"] = "Júnior Lima";</code><br><br>';

        // echo '<code>session_regenerate_id();</code><br><br>';

        echo "<strong>Resultado:</strong> ";
        echo '<code>echo $_SESSION['."'nome'".'];</code> = ';

        // session_start();

        $_SESSION["nome"] = "Júnior Lima";

        echo $_SESSION['nome'];

        echo "<br>";

        echo "<strong>ID da Sessão:</strong> ";
        echo '<code>echo session_id();</code> = ';

        // session_regenerate_id();

        echo session_id();

        echo "<br>";

        echo "<strong>Array da Sessão:</strong> ";
        echo '<code>var_dump($_SESSION);</code> = ';

        var_dump($_SESSION);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->