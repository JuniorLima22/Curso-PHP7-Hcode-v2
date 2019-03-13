<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Interface";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Interface</div>
    <div class="panel-body">

      <h3>
        <small>// <code>Interface</code>: Existe 3 situações onde Interface é realmente importante. <br>
        1 - Pra quem trabalha sozinho: Se você é um programador solitário você pode ultilizar Interface para organizar seu próprio código.<br> 
        2 - Se você trabalha em equipe: è mais interessante ainda.<br>
        3 - E uma outra opção nesse caso é quase obrigatorio é quando você está programando um código que vai conversar com um terceiro..<br>
        </small>
      </h3>
      
      <div class='well well-sm'>
        <strong>Condições: </strong> <br>

        Criar um <code>interface</code> de Veículo.<br>
        <strong>Sintaxe da <code>interface nomeDaInterface {}</code> </strong><br><br>

        <pre>
          <code class="php">
            interface Veiculo {
              public function acelerar($velocidade);
              public function frenar($velocidade);
              public function trocarMarcha($marcha);
            } // End: interface Veiculo

            class Civic implements Veiculo{
              public function acelerar($velocidade){
                echo "O veículo acelerou até ". $velocidade. " km/h";
              }

              public function frenar($velocidade){
                echo "O veículo frenou até ". $velocidade. " km/h";
              }

              public function trocarMarcha($marcha){
                echo "O veículo engatou a marcha ". $marcha;
              }
            } // End: class Civic implements Veiculo

            $carro = new Civic();

            $carro->acelerar(120);

            $carro->frenar(80);
            
            $carro->trocarMarcha(5);
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>interface</code>:</strong> <br>";

            interface Veiculo {
              public function acelerar($velocidade);
              public function frenar($velocidade);
              public function trocarMarcha($marcha);
            } // End: interface Veiculo

            class Civic implements Veiculo{
              public function acelerar($velocidade){
                echo "O veículo acelerou até ". $velocidade. " km/h";
              }

              public function frenar($velocidade){
                echo "O veículo frenou até ". $velocidade. " km/h";
              }

              public function trocarMarcha($marcha){
                echo "E o veículo engatou a marcha ". $marcha;
              }
            } // End: class Civic implements Veiculo

            $carro = new Civic();

            $carro->acelerar(120);
            echo "<br>";

            $carro->frenar(80);
            echo "<br>";

            $carro->trocarMarcha(5);

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->