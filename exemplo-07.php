<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Strings";
  $tituloAula = "Strings em PHP";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>
	
	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Diferença das "Aspas" - Interpolação de Variáveis</div>
    <div class="panel-body">
      <?php 

      /////////////////// Aspas Duplas //////////////////
      echo "<div class='well well-sm'>";

        $nome = "Hcode";

        $nome2 = 'Treinamentos';

        echo "<strong>Aspas Duplas: </strong> <br>";

        echo '<code>$nome = "Hcode"</code> <br>';

        echo '<code>echo = "$nome"</code>: ';

        echo "$nome";

      echo "</div>";

      /////////////////// Aspas Simples ////////////////////
      echo "<div class='well well-sm'>";

        echo "<strong>Aspas Simples: </strong> <br>";

        echo '<code>$nome = "Hcode"</code> <br>';

        echo "<code>echo = ". "'". '$nome'. "'". "</code>: ";

        echo '$nome';

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Funções Nativas para Strings no PHP</div>
    <div class="panel-body">
      <?php 

      // Documentação
      echo '<h4>Documentação Completa:<small><code> <a href="https://php.net/manual/pt_BR/book.strings.php" target="_blank">https://php.net/manual/pt_BR/book.strings.php</a> </code></small></h4>';

      /////////////////// Uppercase //////////////////
      echo "<div class='well well-sm'>";

      // echo "<h4><small>// strtoupper</small></h4>";

      	$nome = "junior lima";

      	echo "<strong>Strtoupper: </strong> <br>";

        echo '<code>$nome = "junior lima"</code> <br>';

        echo '<code>echo strtoupper($nome)</code>: ';

        echo strtoupper($nome);

      echo "</div>";

      /////////////////// Strtolower ////////////////////
      echo "<div class='well well-sm'>";

      	$nome2 = "JUNIOR LIMA";

        echo "<strong>Strtolower: </strong> <br>";

        echo '<code>$nome = "JUNIOR LIMA"</code> <br>';

        echo '<code>echo strtolower($nome)</code>: ';

        echo strtolower($nome2);

      echo "</div>";

      //////////////// Primeira letra Maiuscula /////////////////
      echo "<div class='well well-sm'>";

      	$nome3 = "junior lima";

        echo "<strong>Primeira letra Maiuscula: </strong> <br>";

        echo '<code>$nome = "junior lima"</code> <br>';

        echo '<code>echo ucwrods($nome)</code>: ';

        echo ucwords($nome3);

      echo "</div>";

      //////////////// Primeira letra da frase Maiuscula /////////////////
      echo "<div class='well well-sm'>";

      	$nome3 = "junior lima";

        echo "<strong>Primeira letra da frase Maiuscula: </strong> <br>";

        echo '<code>$nome = "junior lima"</code> <br>';

        echo '<code>echo = ucfirst($nome)</code>: ';

        echo ucfirst($nome3);

      echo "</div>";

      //////////////// Sunstitui alguma informação /////////////////
      echo "<div class='well well-sm'>";

      	$nome3 = "junior lima";

        $nome3 = str_replace("i", "1", $nome3);
        $nome3 = str_replace("a", "7", $nome3);

        echo "<strong>Sunstitui alguma informação: </strong> <br>";

        echo '<code>$nome = "junior lima"</code> <br>';

        echo '<code>echo = str_replace("i", "1", $nome)</code>: ';
        echo "<br>";
        echo '<code>echo = str_replace("a", "7", $nome)</code>: ';

        echo $nome3;

      echo "</div>";

      //////////////// Posição da String /////////////////
      echo "<div class='well well-sm'>";

      	$frase = "A repetição é mãe da retenção.";
      	$q = strpos($frase, "mãe");

        echo "<strong>Posição da String: </strong> <br>";

        echo '<code>$frase = "A repetição é mãe da retenção."</code> <br>';
        echo '<code>$q = strpos($frase, "mãe")</code><br>';

        echo '<code>echo $q</code>: ';

        echo $q;
        // var_dump($q);

      echo "</div>";

      //////////////// Sunstitui alguma informação composta /////////////////
      echo "<div class='well well-sm'>";

      	$frase = "A repetição é mãe da retenção.";

        $texto = substr($frase, 0, 17);
        // $nome3 = str_replace("a", "7", $nome3);

        echo "<strong>Sunstitui alguma informação composta: </strong> <br>";

        echo '<code>$frase = "A repetição é mãe da retenção."</code><br>';

        echo '<code>$texto = substr($frase, 0, 17</code>: ';
        echo "<br>";
        echo '<code>echo = $texto</code>: ';

        echo $texto;
        // var_dump($texto);

      echo "</div>";

      //////////////// Contar caracteries em uma String /////////////////
      echo "<div class='well well-sm'>";

      	$frase1 = "A repetição é mãe da retenção.";

        echo "<strong>Contar caracteries em uma String: </strong> <br>";

        echo '<code>$frase = "A repetição é mãe da retenção."</code><br>';

        echo '<code>echo strlen($frase)</code>: ';

        echo strlen($frase1);

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->


  <!-- END: Exemplos -->