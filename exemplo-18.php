<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Sessão no PHP";
  $tituloAula = "Criando e Entendendo Sessões";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Entendendo Sessões</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// As Váriaveis de <code>Session</code> elas se assemelha as Váriavel Super Globais. Ou seja ela são enchergada equanto o usuário esta conectado em no nosso Site.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir nome na  <code>". '$_SESSION'. "</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

        echo '<code>session_start();</code><br>';
        echo '<code>$_SESSION["nome"] = "Júnior Lima";</code><br><br>';

        echo "<strong>Resultado:</strong> ";
        echo '<code>echo $_SESSION['."'nome'".'];</code> = ';

        // session_start();

        $_SESSION["nome"] = "Júnior Lima";

        echo $_SESSION['nome'];

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Apagando ou Destroindo uma Sessões</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>Session_unset</code> ele apaga a váriavel de Sessão mas não remove o usuário.</small></h3>';

      echo '<h3><small>// <code>Session_destroy</code> ele limpa a váriavel de Sessão e remove o usuário.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Apagar e Destroir uma  <code>". '$_SESSION'. "</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong>";

        echo '<h3><small>// Apaga a Sessão.</small></h3>';

        echo '<code>session_unset($_SESSION['."'nome'".']);</code><br>';


        echo '<h3><small>// Destrói a Sessão.</small></h3>';

        echo '<code>session_destroy($_SESSION['."'nome'".']);</code><br><br>';



        echo '<code>$_SESSION["nome"] = "Júnior Lima";</code><br><br>';

        echo "<strong>Resultado:</strong> ";
        echo '<code>session_unset($_SESSION['."'nome'".']);</code> = ';

        // session_start();


        $_SESSION["nome"] = "Júnior Lima";

        session_unset($_SESSION['nome']);

        echo $_SESSION['nome'];

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->