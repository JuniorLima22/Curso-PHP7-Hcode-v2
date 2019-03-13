<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Polimorfismo";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Polimorfismo</div>
    <div class="panel-body">

      <h3>
        <small>// <code>Polimorfismo</code>: Vem do Grego ter muitas formas. Então imagiana um <code>Método</code> na Classe Pai, e tenho um <code>Método</code> com mesmo nome na Classe Filho que faz outra coisa. Isso é Polimorfismo quando <code>Métodos</code> com mesmo nome em Classes diferentes (Herdadas) tem comportamentos diferentes. Algo que pode ajudar muito a entender o <code>Polimorfismo</code> é a Classe Animal, Veja na prática.<br>
        </small>
      </h3>

      <h3>
        <small>// <code>OBS</code>: Que o <code>Método falar</code> mudou o comportamento entre as Classes. Já o <code>Método andar</code> ele está Herdando da Classe Pai <code>Animal</code>.<br>
        </small>
      </h3>
      
      <div class='well well-sm'>
        <strong>Condições: </strong> <br>

        Criar um <code>abstract class</code> de Automovéis.<br>
        <strong>Sintaxe da <code>abstract class Automovel implements Veiculo {}</code> </strong><br><br>

        <pre>
          <code class="php">
            abstract class Animal {
              public function falar(){
                return "Som";
              }

              public function mover(){
                return "Anda";
              }
            } // End: abstract class Animal

            class Cachorro extends Animal {
              public function falar(){
                return "Late";
              }
            } // End: class Cachorro extends Animal

            class Gato extends Animal {
              public function falar(){
                return "Mia";
              }
            } // End: class Gato extends Animal

            class Passaro extends Animal {
              public function falar(){
                return "Canta";
              }

              // Aqui tem um Polimorfismo e vamos concatenar com o comportamento mover() da 
              // Classe Abstrata (Classe Pai)
              public function mover(){
                return "Voa e " . parent::mover();
              }
            } // End: class Passaro extends Animal

            $pluto = new Cachorro();
            echo $pluto->falar();
            echo $pluto->mover();

            echo "<strong>Resultado <code>class Gato</code>:</strong>";

            $garfield = new Gato();
            echo $garfield->falar();
            echo $garfield->mover();

            echo "<strong>Resultado <code>class Passaro</code>:</strong>";

            $ave = new Passaro();
            echo $ave->falar();
            echo $ave->mover();
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>class Cachorro</code>:</strong> <br>";

            abstract class Animal {
              public function falar(){
                return "Som";
              }

              public function mover(){
                return "Anda";
              }
            } // End: abstract class Animal

            class Cachorro extends Animal {
              public function falar(){
                return "Late";
              }
            } // End: class Cachorro extends Animal

            class Gato extends Animal {
              public function falar(){
                return "Mia";
              }
            } // End: class Gato extends Animal

            class Passaro extends Animal {
              public function falar(){
                return "Canta";
              }

              // Aqui tem um Polimorfismo e vamos concatenar com o comportamento mover() da 
              // Classe Abstrata (Classe Pai)
              public function mover(){
                return "Voa e " . parent::mover();
              }
            } // End: class Passaro extends Animal

            $pluto = new Cachorro();
            echo $pluto->falar(). "<br>";
            echo $pluto->mover(). "<br>";

            echo "<strong>Resultado <code>class Gato</code>:</strong> <br>";

            $garfield = new Gato();
            echo $garfield->falar(). "<br>";
            echo $garfield->mover(). "<br>";

            echo "<strong>Resultado <code>class Passaro</code>:</strong> <br>";

            $ave = new Passaro();
            echo $ave->falar(). "<br>";
            echo $ave->mover(). "<br>";

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->