<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 31</title>

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
        <h1>Criando uma Classe</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Criando uma Classe</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>public</code>: è um Encapsulamento do Atributo, informando que ela é pública e pode ser acessado de fora da Classe.<br></small></h3>';

          echo '<h3><small>// <code>public $nome;</code>: porque ele está dentro da Classe mais ele está fora de algum Método então usa <code>$nome</code> direto. Agora se eu quiser fazer Referência ao Atributo <code>$nome</code> em qualquer um dos Métodos voçê tem que escerver <code>$this->nome;</code>  <br></small></h3>';

          echo '<h3><small>// <code>$this->;</code>: è uma variável interna do PHP, ela serve para Referênciar <code>Atributos</code> e <code>Métodos</code> dentro de outros <code>Métodos</code>.<br></small></h3>';

          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Criar primeira <code>class</code>.<br>";

            /////////////////// Classe DateTime //////////////////
            echo "<strong>Sintaxe da <code>class NomeDaClasse {}</code> </strong> <br><br>";

            echo '<code>class Pessoa {</code><br><br>';
            echo '<code>public $nome; //Atributo</code><br><br>';
            echo '<code>public function falar(){ //Método</code><br><br>';
            echo '<code>return "O meu nome é " .$this->nome;</code><br><br>';
            echo '<code>}}</code><br><br>';
            echo '<code>$junior = new Pessoa();</code><br><br>';
            echo '<code>$junior->nome = "Júnior Lima";</code><br><br>';
            echo '<code>echo $junior->falar();</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";

            class Pessoa {
              public $nome; //Atributo
              public function falar(){ //Método
                return "O meu nome é " .$this->nome;
              }
            }

            $junior = new Pessoa();
            $junior->nome = "Júnior Lima";
            echo $junior->falar();

            echo "<br>";
          echo "</div>";

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