<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Arrays em PHP";
  $tituloAula = "Constantes e Arrays Constantes";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Variavel Constantes</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>Constante</code> é ultilizado por principio não prescisa mudar o valor. Por Exemplo o idioma da Página.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Definir uma Variavel Constante <code>SERVIDOR</code>.<br>';

        /////////////////// Constante //////////////////
        echo "<strong>Sintaxe da Constante: </strong> <br><br>";

        echo '<code>define("SERVIDOR", "127.0.0.1");</code><br>';
        echo '<code>echo SERVIDOR;</code><br><br>';

        echo "<strong>Resultado:</strong> ";

        define("SERVIDOR", "127.0.0.1");

        echo SERVIDOR;

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Constantes</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Definir uma Array Constante <code>BANCO_DE_DADOS</code>.<br>';

        /////////////////// Array Constante //////////////////
        echo "<strong>Sintaxe da Array Constante: </strong> <br><br>";

        echo '<code>define("BANCO_DE_DADOS", [</code><br>';
        echo "<code>'127.0.0.1',</code><br>";
        echo "<code>'root',</code><br>";
        echo "<code>'password',</code><br>";
        echo "<code>'test'</code><br>";
        echo "<code>]);</code><br><br>";

        echo "<strong>Resultado:</strong> ";

        define("BANCO_DE_DADOS", [
          '127.0.0.1',
          'root',
          'password',
          'test'
        ]);

        print_r(BANCO_DE_DADOS);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Constantes Padrão do PHP</div>
    <div class="panel-body">
      <?php

      // Documentação
      echo '<h4>Documentação:<small><code> <a href="https://secure.php.net/manual/pt_BR/reserved.constants.php" target="_blank">https://secure.php.net/manual/pt_BR/reserved.constants.php</a> </code></small></h4>';
      
      echo "<div class='well well-sm'>";

        /////////////////// Constantes Padrão do PHP //////////////////
        echo "<strong>Sintaxe de Constantes Padrão do PHP: </strong> <br><br>";

        echo "<strong>Exemplo 1:</strong><br>";
        echo '<code>echo PHP_VERSION;</code> = ';
        echo PHP_VERSION;

        echo "<br>";

        echo "<strong>Exemplo 2:</strong><br>";
        echo '<code>echo DIRECTORY_SEPARATOR;</code> = ';
        echo DIRECTORY_SEPARATOR;

        echo "<br>";

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->