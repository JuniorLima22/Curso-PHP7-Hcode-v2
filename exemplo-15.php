<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Arrays em PHP";
  $tituloAula = "Arrays em PHP";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Arrays em PHP (Vetor)</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Todo <code>Array</code> inicia em <code>0</code>.<br>// Quando o <code>Array</code> tem uma dimensão ele é chamado de <code>Vetor</code>, pra ser um <code>Array</code> propriamente dito ele teria que ter mais de uma dimensão, ele é chamado de <code>Array</code> Bidimensional, Tridimensional ou assim por diante.</small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Exibir valores da <code>$frutas</code>.<br>';

        /////////////////// Array //////////////////
        echo "<strong>Sintaxe do Array (Vetor): </strong> <br>";

        echo '<code>$futas = array("Laranja", "Abacaxi", "Melancia");</code><br><br>';

        echo '<code>print_r($frutas);</code><br>';

        echo "<strong>Resultado:</strong><br>";

        $frutas = array("Laranja", "Abacaxi", "Melancia");

        print_r($frutas);
        // echo $frutas[1];
        // echo $frutas[1][5];

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Bidimensional</div>
    <div class="panel-body">
      <?php

        $carros[0][1] = "GM";
        $carros[0][2] = "Cobalt";
        $carros[0][3] = "Onix";
        $carros[0][4] = "Camaro";

        $carros[1][1] = "Ford";
        $carros[1][2] = "Fiesta";
        $carros[1][3] = "Fusion";
        $carros[1][4] = "EcoSport";
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Exibir valores da <code>$carros</code>.<br>';

        /////////////////// Array Bidimensional //////////////////
        echo "<strong>Sintaxe do Array Bidimensional: </strong> <br>";

        echo '<code>$carros[0][1] = "GM";</code><br>';
        echo '<code>$carros[0][2] = "Cobalt";</code><br>';
        echo '<code>$carros[0][3] = "Onix";</code><br>';
        echo '<code>$carros[0][4] = "Camaro";</code><br><br>';

        echo '<code>$carros[1][1] = "Ford";</code><br>';
        echo '<code>$carros[1][2] = "Fiesta";</code><br>';
        echo '<code>$carros[1][3] = "Fusion";</code><br>';
        echo '<code>$carros[1][4] = "EcoSport";</code><br><br>';

        echo "<strong>Resultado 1:</strong><br>";
        echo '<code>echo $carros[0][3];</code> = ';
        echo $carros[0][3]."<br>";

        echo "<strong>Resultado 2:</strong><br>";
        echo '<code>echo end($carros[1]);</code> = ';
        echo end($carros[1]);

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Array Bidimensional</div>
    <div class="panel-body">
      <?php

        $pessoas = array();

        array_push($pessoas, array(
          'nome' => 'Júnior Lima',
          'idade' => 27
        ));

        array_push($pessoas, array(
          'nome' => 'Michael Christian',
          'idade' => 3
        ));

        // print_r($pessoas);
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo 'Exibir valores da <code>$pessoas</code>.<br>';

        /////////////////// Array Bidimensional //////////////////
        echo "<strong>Sintaxe do Array Bidimensional: </strong> <br>";

        echo '<code>$pessoas = array();</code><br>';
        echo '<code>array_push($pessoas, array(</code><br>';
        echo "<code>'nome' => 'Júnior Lima',</code><br>";
        echo "<code>'idade' => 27</code><br>";
        echo "<code>));</code><br><br>";

        echo '<code>array_push($pessoas, array(</code><br>';
        echo "<code>'nome' => 'Michael Christian',</code><br>";
        echo "<code>'idade' => 3</code><br>";
        echo "<code>));</code><br><br>";

        echo "<strong>Resultado 1:</strong><br>";
        echo '<code>print_r($pessoas);</code> = ';
        print_r($pessoas);

        echo "<br>";

        echo "<strong>Resultado 2:</strong><br>";
        echo '<code>print_r($pessoas[1]);</code> = ';
        print_r($pessoas[1]);

        echo "<br>";

        echo "<strong>Resultado 3:</strong><br>";
        echo "<code>print_r(".'$pessoas'. "[1]['nome']);</code> = ";
        print_r($pessoas[1]['nome']);

        echo "<br>";

        echo "<strong>Resultado 4:</strong><br>";
        echo "<code>print_r(". '$pessoas'. "[1]['idade']);</code> = ";
        print_r($pessoas[1]['idade']);
        

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->