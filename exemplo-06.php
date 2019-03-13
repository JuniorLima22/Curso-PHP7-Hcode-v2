<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Conhecendo os Operadores do PHP";
  $tituloAula = "Conhecendo os Operadores do PHP";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>
	
	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operadores de Atribuição</div>
    <div class="panel-body">
      <?php 
      //Operador =, igual é o Operador
      $nome = "Junior Lima ";

      //Operador de "Ponto" Concatenação junta duas ou mais Strings 
      echo $nome. "Mais alguma coisa <br>";

      //Operador Composto o Ponto e o Igual
      $nome .= "Treinamentos";

      echo "$nome";

      echo "<hr>";

      /////////////////////// Soma ////////////////////////
      echo "<div class='well well-sm'>";

      $valorTotal = 0;

      $valorTotal += 100;

      $valorTotal += 25;

      echo "<strong>Soma:</strong> 0 + 100 + 25 = ";

      echo $valorTotal;

      echo "</div>";

      /////////////////////// Desconto ////////////////////
      echo "<div class='well well-sm'>";

        $valorTotal = 0;

        $valorTotal += 100;

        $valorTotal += 25;

        $valorTotal *= .9;

        echo "<strong>Desconto:</strong> 0 + 100 + 25 - 10% = ";

        echo $valorTotal;

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

  <hr>

	<!-- BEGIN .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operadores de Aritiméticos</div>
    <div class="panel-body">
      <?php 
      	$a = 10;
      	$b = 2;

      	echo "Soma:  $a + $b = ";
      	echo $a + $b;

      	echo "<br>";

      	echo "Subtração: $a - $b = ";
      	echo $a - $b;

      	echo "<br>";

      	echo "Multiplicação: $a * $b = ";
      	echo $a * $b;

      	echo "<br>";

      	echo "Divisão: $a / $b = ";
      	echo $a / $b;

      	echo "<br>";

      	echo "Modulo (Resto): $a % $b = ";
      	echo $a % $b;

      	echo "<br>";

      	echo "Exponenciação: $a ** $b = ";
      	echo $a * $b;

      ?>
    </div>
  </div>
  <!-- END .panel -->

  <!-- BEGIN .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operadores de Comparação</div>
    <div class="panel-body">
      <?php 
      	$a = 30;
      	$b = 55;

      	echo "Maior Q:  $a <code>></code> $b = ";
      	// echo $a > $b;
      	var_dump($a > $b);

      	echo "<br>";

      	echo "Menor Q: $a <code><</code> $b = ";
      	// echo $a < $b;
      	var_dump($a < $b);

      	echo "<br>";

      	// 1 Igual ele Atribui o valor, e 2 Iguais ele é Comparação de Valor e não de Tipo
      	echo "<h4><small>// 1 Igual ele Atribui o valor, e 2 Iguais ele é Comparação de Valor e não de Tipo.</small></h4>";

      	echo "Igual (Comparação de Valor): $a <code>==</code> $b = ";
      	// echo $a == $b;
      	var_dump($a == $b);

      	echo "<br>";

      	// 3 Iguais ele é Comparação de Valor e Tipo
      	echo "<h4><small>// 3 Iguais ele é Comparação de Valor e Tipo.</small></h4>";
      	echo "Igual de Identidade (Comparação de Valor e Tipo): $a <code>===</code> $b = ";
      	// echo $a == $b;
      	var_dump($a === $b);

      	echo "<br>";

      	echo "Diferente: $a <code>!=</code> $b = ";
      	// echo $a != $b;
      	var_dump($a != $b);

      	echo "<br>";

      	// 2 Iguais ele é Diferente de Valor e Tipo
      	echo "Diferente (Tipo): $a <code>!==</code> $b = ";
      	// echo $a !== $b;
      	var_dump($a !== $b);

      	echo "<br>";

      ?>
    </div>
  </div>
  <!-- END .panel -->

        <!-- BEGIN .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operadores do PHP 7 - (Spaceship e Null Coalesce)</div>
    <div class="panel-body">
      <?php 

        // Spaceship

      	echo '<h4><small>// Ideal para fazer comparações Maior, Menor ou Igual.</small></h4>';

      	echo '<h4><small>// Se $a for Maior trás (1). Se $a e $b for Iguais trás (0). Se $b for Maior trás (-1).</small></h4>';

      echo "<div class='well well-sm'>";
        echo "Spaceship: 60 <code><=></code> 10 = int(1) <br>";
        echo "Spaceship: 55 <code><=></code> 55 = int(0) <br>";
        echo "Spaceship: $a <code><=></code> $b = int(-1) <br>";

        // var_dump($a <=> $b);
      echo "</div>";

      // NULL COALESCE

        // Operador de Comparação NULL COALESCE, já existia em Bancos de Dados e agora veio para o PHP7, pra tratar valores Nulos.
      	// Ideal para ultilizar quando se tem que comparar mais de 2.
      echo '<h4><small>// Ideal para ultilizar quando se tem que comparar mais de 2.</small></h4>';
      echo '<h4><small>// Operador de Comparação NULL COALESCE, já existia em Bancos de Dados e agora veio para o PHP7, pra tratar valores Nulos.</small></h4>';

      $a = NULL;
      $b = NULL;
      $c = 10;

      // echo $a ?? $b ?? $c;

      echo "<div class='well well-sm'>";
        echo "Null Coalesce: <code>??</code><br>";

      	echo '$a = NULL <br>';
      	echo '$b = NULL <br>';
      	echo '$c = 10 <br>';

        echo 'echo $a <code>??</code> $b <code>??</code> $c = 10';

      echo "</div>";

      echo "<div class='well well-sm'>";
        echo "Null Coalesce: <code>??</code><br>";

      	echo '$a = NULL <br>';
      	echo '$b = 8 <br>';
      	echo '$c = 10 <br>';

        echo 'echo $a <code>??</code> $b <code>??</code> $c = 8';

      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END .panel -->

  <!-- BEGIN .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Operadores Incrementais e Decrementais</div>
    <div class="panel-body">
      <?php

      echo "<div class='well well-sm'>";

      $a = 10;

        echo '<h4>Incrementais: <code>++</code> <small>// Depois da Variável (Ou seja ele acrescenta Mais 1).</small></h4>';

      	echo '$a = 10';
      	echo "<br>";

      	echo 'echo <code>$a++</code> = '. $a++;

      	echo "<br>";

      	echo 'echo $a = '. $a;
      echo "</div>";

      ///////////////////////////////////////////////////////////////////////////

      echo "<div class='well well-sm'>";

      $a = 10;
        echo '<h4>Incrementais: <code>++</code> <small>// Antes da Variável (Ou seja ele PRÈ-INCREMENTA Mais 1).</small></h4>';

      	echo '$a = 10';
      	echo "<br>";

      	echo 'echo <code>++$a</code> = '. ++$a;

      	echo "<br>";

      	echo 'echo $a = '. $a;
      echo "</div>";

      echo "<hr>";

      ///////////////////////////////////////////////////////////////////////////

      echo "<div class='well well-sm'>";

      $a = 10;
        echo '<h4>Decrementais: <code>--</code> <small>// Depois da Variável (Ou seja ele Decrementa Menos 1).</small></h4>';

      	echo '$a = 10';
      	echo "<br>";

      	echo 'echo <code>$a--</code> = '. $a--;

      	echo "<br>";

      	echo 'echo $a = '. $a;
      echo "</div>";

      ////////////////////////////////////////////////////////////////////////////

      echo "<div class='well well-sm'>";

      $a = 10;

        echo '<h4>Decrementais: <code>--</code> <small>// Antes da Variável (Ou seja ele PRÈ-DECREMENTA Menos 1.</small></h4>';

      	echo '$a = 10';
      	echo "<br>";

      	echo 'echo <code>--$a</code> = '. --$a;

      	echo "<br>";

      	echo 'echo $a = '. $a;
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Precedência de Operadores (Ordem de Execução)</div>
    <div class="panel-body">
      <?php 

      // Documentação
      echo '<h4>Documentação:<small><code> <a href="http://php.net/manual/pt_BR/language.operators.php" target="_blank">http://php.net/manual/pt_BR/language.operators.php</a> </code></small></h4>';

      /////////////////////// Precedência ////////////////////
      echo "<div class='well well-sm'>";

        $resultado = 10 + 3 / 2;

        echo "<strong>OBS 1:</strong> 10 + 3 / 2 = $resultado";

        echo "<br>";

        $resultado2 = (10 + 3) / 2;

        echo "<strong>OBS 2:</strong> (10 + 3) / 2 = $resultado2";

      echo "</div>";

      //////////////// Precedência com Comparação /////////////

      echo "<div class='well well-sm'>";

        $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;

        echo "<strong>OBS 1:</strong> (10 + 3) / 2 > 5 <code>&&</code> 10 + 5 < 3 = ";
        var_dump($resultado);

      echo "</div>";

      ?>
    </div>
  </div>
	<!-- END: .panel -->

	<!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Curta a Vibe <code>:)</code> <code>dº.ºb</code></div>
    <div class="panel-body">

		<iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/435027258&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>

    </div>
  </div>
	<!-- END: .panel -->


  <!-- END: Exemplos -->