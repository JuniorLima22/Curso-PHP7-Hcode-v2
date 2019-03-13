<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Criando uma Classe";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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