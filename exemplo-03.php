<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Variáveis";
  $tituloAula = "Tipos de dados no PHP (8 tipos)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
<h4>Exemplos</h4>

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading"><a href="" id="tiposBasicos"></a>Tipos Básicos</div>
  <div class="panel-body">

    <h3>
      <small>// Tipos Basicos: <br>
        <code>String</code>  = Letras <br>
          <code>Inteiro</code> = Numerico <br>
          <code>Ponto flutuante</code> = casas decimais <br>
          <code>Buleano</code> = Verdadeiro ou Falso.<br>
      </small>
    </h3>

    <h3>
      <small>// Tipos Compostos: <br>
        <code>Array</code><br>
        <code>Objeto  = POO</code><br>
      </small>
    </h3>

    <h3>
      <small>// Tipos Especial: <br>
        <code>Resource</code><br>
        <code>Null</code><br>
      </small>
    </h3>

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Exibir tipo de dados no PHP.<br>

      <strong>Sintaxe da <code></code> </strong><br><br>

      <pre>
        <code class="php">
          ///////////// Tipos Basicos ///////////////////
          $nome = "Junior Lima";
          $site = 'bit.ly/JrLimaSystem';

          $ano = 1990;
          $salario = 5500.99;
          $bloqueado = false;

         echo "String (Letras): $nome";
         echo "String (Letras): $site";
         echo "Inteiro (Númerico): $ano";
         echo "Ponto flutuante (Casas Decimais): $salario";
         echo "Buleano (Verdadeiro ou Falso): ". '$bloqueado'. " = false";
        </code>
      </pre>

      <?php
        echo "<strong>Resultado <code>String</code>: </strong>";

        ///////////// Tipos Basicos ///////////////////
        $nome = "Junior Lima";
        $site = 'bit.ly/JrLimaSystem';

        $ano = 1990;
        $salario = 5500.99;
        $bloqueado = false;

       echo "String (Letras): $nome <br>";

       echo "<strong>Resultado <code>String</code>: </strong>";
       echo "String (Letras): $site <br>";

       echo "<strong>Resultado <code>Inteiro</code>: </strong>";
       echo "Inteiro (Númerico): $ano <br>";

       echo "<strong>Resultado <code>Ponto Flutuante</code>: </strong>";
       echo "Ponto flutuante (Casas Decimais): $salario <br>";

       echo "<strong>Resultado <code>Buleano</code>: </strong>";
       echo "Buleano (Verdadeiro ou Falso): ". '$bloqueado'. " = false";
      ?>
    </div> <!-- End: .well well-sm -->
  </div> <!-- End: .panel-body -->
</div> <!-- End: .panel panel-primary -->
<!-- END: .panel -->

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading">Tipos Compostos</div>
  <div class="panel-body">

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Exibir tipo de dados no PHP.<br>

      <strong>Sintaxe da <code></code> </strong><br><br>

      <pre>
        <code class="php">
          ////////// Array ////////////
          $frutas = array("Abacaxi", "Laranja", "Manga");

          echo $frutas[1];

          ////////// POO //////////

          $nascimento = new Datetime();

          var_dump($nascimento);
        </code>
      </pre>

      <?php
        echo "<strong>Resultado <code>Array</code>: </strong>";

        ////////// Array ////////////
        $frutas = array("Abacaxi", "Laranja", "Manga");

        echo $frutas[1];

        echo "<br>";

        ////////// POO //////////
        echo "<strong>Resultado <code>POO</code>: </strong>";

        $nascimento = new Datetime();

        var_dump($nascimento);
      ?>
    </div> <!-- End: .well well-sm -->
  </div>
</div>
<!-- END: .panel -->

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
  <div class="panel-heading">Tipos Especial</div>
  <div class="panel-body">

    <div class='well well-sm'>
      <strong>Condições: </strong> <br>
      Exibir tipo de dados no PHP.<br>

      <strong>Sintaxe da <code></code> </strong><br><br>

      <pre>
        <code class="php">
          ////////// Resource ////////////
        
          $arquivo = fopen("exemplo-03.php", "r");
          var_dump($arquivo);

          ////////// Null //////////
          // Null = Ausencia de valor ou seja não existe.
          // Vazio = Elefoi iniciado já está reservado na memória só não tem informação.

          $nulo = Null;
          $vazio = "";
        </code>
      </pre>

      <?php
        echo "<strong>Resultado <code>Null e Vazio</code>: </strong>";

        ////////// Resource ////////////
        
        $arquivo = fopen("exemplo-03.php", "r");
        var_dump($arquivo);

        ////////// Null //////////
        // Null = Ausencia de valor ou seja não existe.
        // Vazio = Elefoi iniciado já está reservado na memória só não tem informação.

        $nulo = Null;
        $vazio = "";
      ?>
    </div> <!-- End: .well well-sm -->
  </div>
</div>
<!-- END: .panel -->
<!-- END: Exemplos -->