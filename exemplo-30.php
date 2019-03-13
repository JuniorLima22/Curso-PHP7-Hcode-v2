<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Conceitos de Programação Orientada a Objetos";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Conceitos de Programação Orientada a Objetos</div>
    <div class="panel-body">
      <?php

      echo '<h2><small>// <code>POO</code>: Programação Orientada a Objeto é um estilo de Programação. Algumas Linguagens de Programção são totalmente Orientada a Objeto como por exemplo o <code>Java</code>.<br></small></h2>';    

      echo '<h2><small>// <code>O que é uma Classe?</code>: Pense numa Classe como uma caixa que na verdade o que importa é o que está dentro dela. Então toda vez que voçê vai criar um assunto por exemplo: Criar um Cadastro que envolve Banco de Dados, eu posso ter uma Classe pra Bancos de Dados.<br></small></h2>';

      echo '<h2><small>// <code>Resumo o que é uma Classe?</code>: A parte principal em Orientação a Objeto são as Classes. O que são as Classes?: São assuntos que vc cria pra organizar seu codigo, pense em um arquivo compactado (.zip) o que importa é que está dentro dele.<br></small></h2>';

      echo '<h2><small>// <code>O que voçê encontra dentro de uma Classe?</code>: Voçê encontra <code>Variavéis</code> e <code>Funções</code> que ganham recurços a mais e por isso são chamados de <code>Atributos</code> e <code>Métodos</code>.<br></small></h2>';  

      echo '<h2><small>// <code>Classe é um conjunto de Atributo e Metódos</code>: Fica mais facil de entender o que é uma Classe. Bom o que eu preciso amazenar eu coloco em <code>Atributos</code> e o que eu preciso executar eu coloco nos <code>Métodos</code>.<br></small></h2>';    

      echo '<h2><small>// <code>Objeto</code>: Toda vez que voçê for criar essa Classe, voçê vai colocar os <code>Atributos</code> e <code>Métodos</code> mas na hora de usá-la nós prescisamos fazer um processo chamado de <code>Instância</code>, é quando efetivamente iremos ultilizar essa Classe.<br></small></h2>';  
              
      echo '<h2><small>// <code>O que é um Objeto?</code>: O Objeto nada mais é do que uma <code>Variável</code> que representa ou tira uma cópia da Classe. A esse processo damos o nome de <code>Instância</code>, é quando uma <code>Variável</code> representa ou <code>Instância</code> uma Classe.<br></small></h2>';          
      
      

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->