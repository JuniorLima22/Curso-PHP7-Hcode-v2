<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Estruturas de Controle e Laços de repetição";
  $tituloAula = "Laços de repetição - Foreach";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Foreach</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// O <code>foreach</code> que significa para CADA, é uma estrutura de repetição do PHP que utilizamos para percorrer <code>ARRAY</code> e Coleções. Supondo que tenho uma <code>ARRAY</code> ou Variável com varios valores, para cada itens que exitem dentro da variavel repita uma determinada instrução.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>Imprimir o Mês dentro da Variável Meses</code><br>';

        /////////////////// Foreach //////////////////
        echo "<strong>Sintaxe do Foreach: </strong> <br>";

        echo '<code>$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");</code><br><br>';

        echo '<code>foreach ($meses as $mes) {</code><br>';

        echo '<code>echo "O mês é: ".'. '$mes'. ";<br>}</code><br>";

        echo "<strong>Resultado:</strong><br>";

        $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

        foreach ($meses as $mes) {
          echo "O mês é: ". $mes. "<br>";
        }

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Foreach (com posição do Array)</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo '<code>Imprimir o Mês dentro da Variável Meses</code><br>';

        /////////////////// Foreach //////////////////
        echo "<strong>Sintaxe do Foreach: </strong> <br>";

        echo '<code>$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");</code><br><br>';

        echo '<code>foreach ($meses as $index => $mes) {</code><br>';

        echo '<code>echo "Indice: ".'. '$index'. ";</code><br>";

        echo '<code>echo "O mês é: ".'. '$mes'. ";<br>}</code><br>";

        echo "<strong>Resultado:</strong><br>";

        $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

        foreach ($meses as $index => $mes) {

          echo "Indice: ". $index. "<br>";
          echo "O mês é: ". $mes. "<br><br>";
        }

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Foreach (com Formulário)</div>
    <div class="panel-body">

      <div class='well well-sm'>
        <strong>Prencha o Formulário: </strong> <br>
        <!-- Como no form não foi colocado o action, por padrão é a propria página. -->
        <!-- Como no form não foi colocado o method, por padrão é a GET. -->
        <form>
          <input type="text" name="nome">
          <input type="date" name="nascimento">
          <input type="submit" value="OK">
        </form> <hr>

        <?php

        // Adciona o if para não aparecer um Notice de Não definido
        if (isset($_GET)) {

          foreach ($_GET as $key => $value) {

            echo "<strong>Nome do campo: </strong>". $key. "<br>";
            echo "<strong>Valor do campo: </strong>". $value. "<br>";

            echo "<hr>";

          }
        }

        ?>
      </div>

    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->