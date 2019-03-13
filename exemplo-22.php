<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Funções em PHP";
  $tituloAula = "Parâmetros de Funções";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Parâmetros de Funções</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Parâmetro é chamado também de argumento, significa informações que uma <code>function</code> prescisa pra ela poder trabalhar corretamente.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir <code>function</code> com Parâmetros.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function ola($texto){</code><br>';
        echo '<code>return "Olá $texto!";<br>}</code><br>';
        echo '<code>echo ola("mundo");</code><br>';
        echo '<code>echo ola("Michael Christian");</code><br>';
        echo '<code>echo ola("Júnior Lima");</code><br><br>';

        echo "<strong>Resultado:</strong> <br>";

        function ola($texto){
          return "Olá $texto! <br>";
        }

        echo ola("mundo");
        echo ola("Michael Christian");
        echo ola("Júnior Lima");

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Definir um valor padrão para os Parâmetros</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir <code>function</code> com Parâmetros.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function ola($texto = "mundo"){</code><br>';
        echo '<code>return "Olá $texto!";<br>}</code><br>';

        echo '<code>echo ola();</code><br>';
        echo '<code>echo ola("");</code><br>';
        echo '<code>echo ola("Michael Christian");</code><br>';
        echo '<code>echo ola("Júnior Lima");</code><br><br>';

        echo "<strong>Resultado:</strong> <br>";

        function ola2($texto = "mundo"){
          return "Olá $texto! <br>";
        }

        echo ola2();
        echo ola2("");
        echo ola2("Michael Christian");
        echo ola2("Júnior Lima");

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Passando mais de um Parâmetros</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir <code>function</code> com Parâmetros.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function ola($texto = "mundo", $periodo = "Bom dia"){</code><br>';
        echo '<code>return "Olá $texto!";<br>}</code><br>';

        echo '<code>echo ola();</code><br>';
        echo '<code>echo ola("", "Boa Tarde");</code><br>';
        echo '<code>echo ola("Michael Christian", "Boa noite");</code><br>';
        echo '<code>echo ola("Júnior Lima", "");</code><br><br>';

        echo "<strong>Resultado:</strong> <br>";

        function ola3($texto = "mundo", $periodo = "Bom dia"){
          return "Olá $texto! $periodo<br>";
        }

        echo ola3();
        echo ola3("", "Boa Tarde");
        echo ola3("Michael Christian", "Boa noite");
        echo ola3("Júnior Lima", "");

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função com vários Parâmetros</div>
    <div class="panel-body">
      <?php
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Exibir <code>function</code> com Parâmetros.<br>";

        /////////////////// Function //////////////////
        echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";

        echo '<code>function ola(){</code><br>';
        echo '<code>$argumentos = func_get_args();</code><br>';
        echo '<code>return $argumentos;<br>}</code><br>';

        echo '<code>var_dump(ola("Bom dia", 10));</code><br>';

        echo "<strong>Resultado:</strong> <br>";

        function bomdia(){
          $argumentos = func_get_args();
          return $argumentos;
        }

        var_dump(bomdia("Bom dia", 10));

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->