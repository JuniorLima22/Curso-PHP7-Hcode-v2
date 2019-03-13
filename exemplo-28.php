<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Data e Hora no PHP";
  $tituloAula = "Definindo a configuração regional com setlocale()";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função <code>setlocale()</code> com <code>strftime()</code></div>
    <div class="panel-body">
      <?php

      // Documentação
      echo '<h4>Função Setlocale():<small><code> <a href="https://secure.php.net/manual/pt_BR/function.strftime.php" target="_blank">https://secure.php.net/manual/pt_BR/function.strftime.php</a> </code></small></h4>';

      echo '<h3><small>// <code>strftime</code>: Formata uma hora/data local de acordo com a configuração do idioma. Nome do mês e dia da semana e outras strings respeitam o idioma corrente definido com a função <code>setlocale()</code>.<br></small></h3>';          

      echo '<h3><small>// <code>LC_ALL</code>: é uma constante do PHP.<br></small></h3>';
      echo '<h3><small>// <code>ucwords()</code>: Transforma a primeira letra em Maiúscula.<br></small></h3>';
      echo '<h3><small>// Padrão de Linguagem a ser usada: Recomenda-se ultilizar os 3, pois fica idependente de plataforma. <br>
            Linux: <code>pt_BR</code> <br>
            Windows: <code>portuguese</code> <br>
            Acentuação e Caracteres: <code>pt_BR.utf-8</code>
      </small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir Função <code>setlocale</code> com os parâmetros do <code>strftime()</code>.<br>";

        /////////////////// setlocale //////////////////
        echo "<strong>Sintaxe da <code>setlocale()</code>: </strong> <br><br>";

        echo '<code>setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");</code><br><br>';
        echo '<code>echo ucwords(strftime("%d %A %B %Y"));</code><br><br>';

        echo "<strong>Resultado 1:</strong> ";

        setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

        echo ucwords(strftime("%d %A %B %Y"));

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->