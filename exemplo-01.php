<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Variáveis";
  $tituloAula = "Variável";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Variável</div>
    <div class="panel-body">

      <h2>
        <small>// <code>Variável</code>: As variáveis no PHP são representadas por um cifrão ($) seguido pelo nome da variável. Os nomes de variável são case-sensitive.<br>
        </small>
      </h2>

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar  e visualizar uma variável.<br>

        <strong>Sintaxe da <code>$nomeDaVariavel = "conteudoDaVariavel";</code> </strong><br><br>

      </div> <!-- End: .well well-sm -->

        <pre><strong>Visualizando uma Variavel</strong>
          <code class="php">
    $nome = "HCODE";
    echo "$nome";
    var_dump($nome);
          </code>
        </pre>

      <div class='well well-sm'>
        <strong>Resultado <code>echo</code>:</strong><br>
        <?php 
          $nome = "HCODE";

          echo "$nome"."<br><br>";

          echo "<strong>Resultado <code>var_dump()</code>:</strong><br>";
          var_dump($nome);
        ?>

      </div> <!-- End: .well well-sm -->

        

      
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->