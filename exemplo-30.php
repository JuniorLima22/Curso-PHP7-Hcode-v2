<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 30</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php 
      require_once ("menu.php");
    ?>

    <div class="container">
      
      <div class="page-header">
        <h1>Conceitos de Programação Orientada a Objetos</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Conceitos de Programação Orientada a Objetos</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>POO</code>: Programação Orientada a Objeto é um estilo de Programação. Algumas Linguagens de Programção são totalmente Orientada a Objeto como por exemplo o <code>Java</code>.<br></small></h3>';    

          echo '<h3><small>// <code>O que é uma Classe?</code>: Pense numa Classe como uma caixa que na verdade o que importa é o que está dentro dela. Então toda vez que voçê vai criar um assunto por exemplo: Criar um Cadastro que envolve Banco de Dados, eu posso ter uma Classe pra Bancos de Dados.<br></small></h3>';

          echo '<h3><small>// <code>Resumo o que é uma Classe?</code>: A parte principal em Orientação a Objeto são as Classes. O que são as Classes?: São assuntos que vc cria pra organizar seu codigo, pense em um arquivo compactado (.zip) o que importa é que está dentro dele.<br></small></h3>';

          echo '<h3><small>// <code>O que voçê encontra dentro de uma Classe?</code>: Voçê encontra <code>Variavéis</code> e <code>Funções</code> que ganham recurços a mais e por isso são chamados de <code>Atributos</code> e <code>Métodos</code>.<br></small></h3>';  

          echo '<h3><small>// <code>Classe é um conjunto de Atributo e Metódos</code>: Fica mais facil de entender o que é uma Classe. Bom o que eu preciso amazenar eu coloco em <code>Atributos</code> e o que eu preciso executar eu coloco nos <code>Métodos</code>.<br></small></h3>';    

          echo '<h3><small>// <code>Objeto</code>: Toda vez que voçê for criar essa Classe, voçê vai colocar os <code>Atributos</code> e <code>Métodos</code> mas na hora de usá-la nós prescisamos fazer um processo chamado de <code>Instância</code>, é quando efetivamente iremos ultilizar essa Classe.<br></small></h3>';  
                  
          echo '<h3><small>// <code>O que é um Objeto?</code>: O Objeto nada mais é do que uma <code>Variável</code> que representa ou tira uma cópia da Classe. A esse processo damos o nome de <code>Instância</code>, é quando uma <code>Variável</code> representa ou <code>Instância</code> uma Classe.<br></small></h3>';          
          
          

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- END: Exemplos -->

			<hr>

			<div class="col-sm-6">
	      <a href="index.php"><button class="btn btn-primary">Voltar</button></a>
	    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>