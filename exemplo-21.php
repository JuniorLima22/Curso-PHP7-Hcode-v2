<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Funções em PHP";
  $tituloAula = "Criando Funções de Usuário";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Function (Sub-rotina)</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir  <code>function</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function ola(){</code><br>';
        echo '<code>echo "Olá Mundo!";<br>}</code><br>';
        echo '<code>ola();</code><br><br>';

        echo "<strong>Resultado:</strong> ";

        function ola(){
          echo "Olá Mundo! <br>";
        }

        ola();


      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Function</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir  <code>function</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function ola(){</code><br>';
        echo '<code>return "Olá Mundo!";<br>}</code><br>';
        echo '<code>echo ola();</code><br><br>';

        echo "<strong>Resultado:</strong> ";

        function ola2(){
          return "Olá Mundo! <br>";
        }

        echo ola2();

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Function</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Calcular salário de Júnior Lima com <code>function</code>.<br>";

        /////////////////// _SESSION //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function salario(){</code><br>';
        echo '<code>return 946.00;<br>}</code><br>';
        echo '<code>echo "Júnior Lima recebeu 3 salários: ". (salario()*3);</code><br><br>';

        echo "<strong>Resultado:</strong> ";

        function salario(){
          return 946.00;
        }

        echo "Júnior Lima recebeu 3 salários: ". (salario()*3);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->