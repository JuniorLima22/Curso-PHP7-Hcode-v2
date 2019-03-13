<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Encapsulamento";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Encapsulamento</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>Encapsulamento</code>: O que significa isso no contexto a Orientação a Objeto? Como o próprio nome diz Proteger ou controlar quem pode ver o quê (Modificador de Acesso).<br></small></h3>';

      echo '<h3><small>// <code>protected</code>: Quem pode acessar? Só quem pode acessar um <code>Atributo</code> ou um <code>Método</code> que é <code>protected</code> só quem ta dentro da própria Classe ou quem herda dessa Classe (A Classse Filha). O Objeto diretamente não consegue acessar.<br></small></h3>';

      echo '<h3><small>// <code>private</code>: O <code>private</code> ele está um nível acima de proteção ele é mais protegido do que o <code>protected</code>.<br></small></h3>';

      echo '<h3><small>// Qual a diferença entre <code>private</code> e o <code>protected</code>?: È que o <code>private</code> nem mesmo as Classes que herdam vai conseguir acessar somente a própria Classe.<br></small></h3>';

      echo '<h3><small>// Quem pode ter acesso aos <code>Atributos</code> e <code>Métodos</code>?:<br> 
      1 - <code>Atributos</code> e <code>Métodos</code> da mesma Classe <br>
      2 - <code>Atributos</code> e <code>Métodos</code> das Classes Extendidas: Que são as Classes Filhas (Herança)<br>
      3 - <code>Atributos</code> e <code>Métodos</code> acessado pelo Objeto.<br></small></h3>';

      echo '<h3><small>// Resumindo:<br>
      <code>public</code>: Todo mundo ver.<br>          
      <code>protected</code>: Na mesma Classe ou Classe Extendida (Classe Filhas).<br>
      <code>private</code>: Só na mesma Classe.<br></small></h3>';

      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Criar um <code>Encapsulamento</code>.<br>";

        /////////////////// Encapsulamento //////////////////
        echo '<strong>Sintaxe da <code>class nomeDaClass {}</code> </strong> <br><br>';
      ?>

        <pre>
          <code class="php">
            class Pessoa {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";
            } // End: class Pessoas
            
            $objeto = new Pessoa();
            echo $objeto->nome;
            echo $objeto->idade;
            echo $objeto->senha;
            </code>
        </pre>

      <?php
        echo "<strong>Resultado <code>public</code>:</strong> <br>";

            class Pessoa {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";
            } // End: class Pessoa

            $objeto = new Pessoa();

            echo $objeto->nome. "<br>";

            echo "<strong>Resultado <code>protected</code>:</strong> <br>";
            echo "Da FATAL ERRO pois não consegue acessar pois o Atributo esta Protegido". "<br>";
            // echo $objeto->idade. "<br>";

            echo "<strong>Resultado <code>private</code>:</strong> <br>";
            echo "Da FATAL ERRO pois não consegue acessar pois o Atributo esta Privado";
            // echo $objeto->senha. "<br>";

            unset($objeto);

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Encapsulamento</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Observe que o <code>Método</code> <code>verDados</code> consegue ver quem é <code>protected</code> e <code>private</code> pois ele esta na mesma Classe e no modo <code>public</code>.<br></small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Criar um <code>Encapsulamento</code>.<br>";

        /////////////////// Encapsulamento //////////////////
        echo '<strong>Sintaxe da <code>class nomeDaClass {}</code> </strong> <br><br>';
      ?>

        <pre>
          <code class="php">
            class Pessoa {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";

              public function verDados(){
                echo $this->nome;
                echo $this->idade;
                echo $this->senha;
              }
            } // End: class Pessoa

            $objeto = new Pessoa()
            <strong>Resultado <code>public</code>:</strong> $objeto->verDados();
          </code>
        </pre>

      <?php
        echo "<strong>Resultado:</strong><br>";

            class Pessoa2 {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";

              public function verDados(){
                echo $this->nome . "<br>";
                echo $this->idade . "<br>";
                echo $this->senha . "<br>";
              }
            } // End: class Pessoa2

            $objeto = new Pessoa2();

            $objeto->verDados();

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Encapsulamento Extendida</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Observe que dentro da <code>class Programador</code> não tem o método <code>verDados</code>, mas ela é Extendida da <code>class Pessoa</code> que tem o método <code>verDados</code> e ele é <code>public</code>, então ele Herda o método <code>verDados</code> da <code>class Pessoa</code>.<br></small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Criar um <code>Encapsulamento Extendida</code>.<br>";

        /////////////////// Encapsulamento Extendida //////////////////
        echo '<strong>Sintaxe da <code>class Programador extends Pessoa {}</code> </strong> <br><br>';
      ?>

        <pre>
          <code class="php">
            class Pessoa {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";

              public function verDados(){
                echo $this->nome;
                echo $this->idade;
                echo $this->senha;
              }
            } // End: class Pessoa

            class Programador extends Pessoa {

            } // End: class Programador extends Pessoa

            $objeto = new Programador();

            <strong>Resultado <code>class Programador extends Pessoa</code>:</strong> $objeto->verDados();
          </code>
        </pre>

      <?php
        echo "<strong>Resultado <code>class Programador extends Pessoa</code>:</strong><br>";

            class Pessoa3 {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";

              public function verDados(){
                echo $this->nome . "<br>";
                echo $this->idade . "<br>";
                echo $this->senha . "<br>";
              }
            } // End: class Pessoa

            class Programador extends Pessoa3 {

            } // End: class Programador extends Pessoa3

            $objeto = new Programador();

            $objeto->verDados();

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Encapsulamento Extendida 2</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// Observe que dentro da <code>class Programador</code> agora tem o método <code>verDados</code>. Então quem vai ser chamado, é o método <code>verDados</code> da <code>class Programador</code> que ele é <code>public</code> também. Porém:<br>
      <code>$this->nome</code>: Vai continuar existindo na <code>class Programador</code> por que Herdou da <code>class Pessoa</code> e ele é <code>public</code><br>
      <code>$this->idade</code>: Ele é <code>protected</code> mais todo mundo que Herda também continua tendo acesso.<br>
      <code>$this->senha</code>: Ele é <code>private</code> então ele não Herda da <code>class Pessoa</code><br></small></h3>';
      
      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Criar um <code>Encapsulamento Extendida</code>.<br>";

        /////////////////// Encapsulamento Extendida //////////////////
        echo '<strong>Sintaxe da <code>class Programador extends Pessoa {}</code> </strong> <br><br>';
      ?>

        <pre>
          <code class="php">
            class Pessoa {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";

              public function verDados(){
                echo $this->nome;
                echo $this->idade;
                echo $this->senha;
              }
            } // End: class Pessoa

            class Programador extends Pessoa {
              public function verDados(){

              // Função para Visualizar qual é Classe que está sendo chamado
                echo get_class($this);
                
                echo $this->nome;
                echo $this->idade;
                echo $this->senha;
              }
            } // End: class Programador extends Pessoa

            $objeto = new Programador();

            <strong>Resultado <code>class Programador extends Pessoa</code>:</strong> $objeto->verDados();
          </code>
        </pre>

      <?php
        echo "<strong>Resultado <code>class Programador extends Pessoa</code>:</strong><br>";

            class Pessoa4 {
              public $nome = "Rasmos Lerdorf";
              protected $idade = 48;
              private $senha = "123456";

              public function verDados(){
                echo $this->nome . "<br>";
                echo $this->idade . "<br>";
                echo $this->senha . "<br>";
              }
            } // End: class Pessoa4

            class Programador2 extends Pessoa4 {
              public function verDados(){

                // Função para Visualizar qual é Classe que está sendo chamado
                echo get_class($this);

                echo "<br>";

                echo $this->nome . "<br>";
                echo $this->idade . "<br>";
                echo $this->senha . "<br>";
              }
            } // End: class Programador extends Pessoa4

            $objeto = new Programador2();

            $objeto->verDados();

        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->