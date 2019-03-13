<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Variáveis";
  $tituloAula = "Escopo de Variáveis";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <div class="panel panel-default">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Escopo</div>
    <div class="panel-body">
      <?php 
      $nome = "Junior Lima";

      function teste() {
      	//Com a variavel GLOBAL indica que $nome aqui ou $nome fora da FUNCTION é a mesma coisa
      	//Ou seja vc usa dentro da function a variável que está fora.
      	global $nome;
      	echo $nome;
      }

      function teste2(){
      	$nome = " e Michael Christian do";
      	echo $nome." Agora no Teste 2";
      }

      // Chamando a Função
      teste();
      teste2();

      ?>
    </div>
  </div>


  <!-- END: Exemplos -->