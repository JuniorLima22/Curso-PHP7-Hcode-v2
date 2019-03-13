<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Variáveis";
  $tituloAula = "Variáveis Pré-definida (Arrays Super Globais)";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <div class="panel panel-default">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Arrays Super Globais</div>
    <div class="panel-body">
      <?php 
      ///////////// Arrays Super Globais ///////////////////
      //Toda informação vinda por _GET ou _POST será String
      //http://localhost/udemy/Projeto_PHP/php/exemplo-04.php?a=123

        $nome = $_GET["a"];

        var_dump($nome);
        
       ?>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Conversão (Casting)</div>
    <div class="panel-body">
      <?php 
        ////////// Mudar o tipo da Variável ////////////
        $nome = (int)$_GET["a"];

        var_dump($nome);
       ?>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Enviar mais de uma informação via _GET</div>
    <div class="panel-body">
      <?php 
      ////////// IP ////////////
      
        $nome = (int)$_GET["a"];

        var_dump($nome);

       ?>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">IP do Usuário</div>
    <div class="panel-body">
      <?php 
      ////////// IP ////////////
      
        $ip = $_SERVER["REMOTE_ADDR"];

        echo "$ip";
       ?>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">Endereço da URL (Ideal para Sistema de Log's)</div>
    <div class="panel-body">
      <?php 
      ////////// Log's ////////////
      
        $ip = $_SERVER["SCRIPT_NAME"];

        echo "$ip";
       ?>
    </div>
  </div>
  <!-- END: Exemplos -->