<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Sessão no PHP";
  $tituloAula = "Funções para Sessão";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Armazenamento da Sessão</div>
    <div class="panel-body">
      <?php

      // Documentação
      echo '<h4>Funções para Sessão:<small><code> <a href="http://php.net/manual/pt_BR/book.session.php" target="_blank">http://php.net/manual/pt_BR/book.session.php</a> </code></small></h4>';

      echo '<h3><small>// <code>session_save_path</code> Obtém e/ou define o caminho para armazenamento da sessão atual.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir caminho da  <code>". '$_SESSION'. "</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

        echo '<code>session_start();</code><br>';
        echo '<code>echo session_save_path();</code><br><br>';

        echo "<strong>Resultado:</strong> ";
        // echo '<code>echo session_save_path();</code> = ';

        session_start();

        echo session_save_path();

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Status da Sessão</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>session_status</code> Retorna o status atual da sessão.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Retornar Status atual da  <code>". '$_SESSION'. "</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da ". '$_SESSION'. ": </strong> <br><br>";

        echo '<code>session_start();</code><br>';
        echo '<code>var_dump(session_status());</code>';

        echo '<h3><small>// Valor Retornado.</small></h3>';

        echo '<h4>PHP_SESSION_DISABLED:<small> Se as sessões estiverem desabilitadas.</small></h4>';
        echo '<h4>PHP_SESSION_NONE:<small> Se as sessões estiverem habilitadas, mas nenhuma existir.</small></h4>';
        echo '<h4>PHP_SESSION_ACTIVE:<small> Se as sessões estiverem habilitadas, e uma existir.</small></h4>';


        echo "<strong>Resultado:</strong> ";

        session_start();

        var_dump(session_status());

        // $status = session_status();

        echo "<br>";

        switch (session_status()) {
          case PHP_SESSION_DISABLED:
            echo "<h4>PHP_SESSION_DISABLED:<small> Se as sessões estiverem desabilitadas.</small></h4>";
            break;
          
          case PHP_SESSION_NONE:
            echo "<h4>PHP_SESSION_NONE:<small> Se as sessões estiverem habilitadas, mas nenhuma existir.</small></h4>";
            break;

            case PHP_SESSION_ACTIVE:
            echo "<h4>PHP_SESSION_ACTIVE:<small> Se as sessões estiverem habilitadas, e uma existir.</small></h4>";
            break;
        }

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->