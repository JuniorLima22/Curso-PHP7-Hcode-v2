<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 32</title>

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
        <h1>Atributos e Métodos</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Métodos Getttes e Setters</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>public</code>: è um Encapsulamento do Atributo, informando que ela é pública e pode ser acessado de fora da Classe.<br></small></h3>';

          echo '<h3><small>// <code>private</code>: Esse é o normal. Temos Métodos Getttes e Setters, são Métodos que voçê pode pegar os valores no Atributo e voçê pode definir esses valores. Por que que faz isso via método e não direto no Atributo ou Atuibuto <code>public</code>? Porque voçê pode validar ou tratar esses atributos, pode colocar alguma regra nesse momento que pega ou no momento que define ou seja almenta o controle.<br></small></h3>';

          echo '<h3><small>// <code>$this->;</code>: è uma variável interna do PHP, ela serve para Referênciar <code>Atributos</code> e <code>Métodos</code> dentro de outros <code>Métodos</code>.<br></small></h3>';

          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Criar <code>class Carro</code> para exibir o Modelo, Motor e Ano do carro.<br>";

            /////////////////// Métodos Getttes e Setters //////////////////
            echo "<strong>Sintaxe da <code>class NomeDaClasse {}</code> </strong> <br><br>";
          ?>

            <pre>
              class Carro {
                private $modelo;
                private $motor;
                private $ano;

                // Para cada um desses Atributos teremos 2 Métodos um pra Pegar o valor e o outro para Definir o valor

                public function getModelo(){
                  return $this->modelo;
                }

                public function setModelo($modelo){
                  //Nesse contexto $this->modelo é uma coisa é como se fosse uma Variável e Variável $modelo é outra.
                  $this->modelo = $modelo; 
                }

                public function getMotor():float{
                  return $this->motor;
                }

                public function setMotor($motor){
                  $this->motor = $motor;
                }

                public function getAno():int{
                  return $this->ano;
                }

                public function setAno($ano){
                  $this->ano = $ano;
                }

                //Criar um Método que mostra todas as informações desse véiculo
                public function exibir(){
                  return array(
                    "modelo"=>$this->getModelo(),
                    "motor"=>$this->getMotor(),
                    "ano"=>$this->getAno()
                  );
                }
              }

              $gol = new Carro();

              // Tentando acessar Direto observa que da um Erro Fatal. 
              // Que não pode acessar uma propriedade Privado na Classe Carro na variável $modelo.
              // $gol->modelo = "Gol GT"; 

              // Forma correta de Acessar uma propriedade Privado
              $gol->setModelo("Gol GT");
              $gol->setMotor("1.6");
              $gol->setAno("2018");

              print_r($gol->exibir());

              var_dump($gol->exibir());  
            </pre>

          <?php
            echo "<strong>Resultado com print_r:</strong> ";

            class Carro {
              private $modelo;
              private $motor;
              private $ano;

              // Para cada um desses Atributos teremos 2 Métodos um pra Pegar o valor e o outro para Definir o valor

              public function getModelo(){
                return $this->modelo;
              }

              public function setModelo($modelo){
                //Nesse contexto $this->modelo é uma coisa é como se fosse uma Variável e Variável $modelo é outra.
                $this->modelo = $modelo; 
              }

              public function getMotor():float{
                return $this->motor;
              }

              public function setMotor($motor){
                $this->motor = $motor;
              }

              public function getAno():int{
                return $this->ano;
              }

              public function setAno($ano){
                $this->ano = $ano;
              }

              //Criar um Método que mostra todas as informações desse véiculo
              public function exibir(){
                return array(
                  "modelo"=>$this->getModelo(),
                  "motor"=>$this->getMotor(),
                  "ano"=>$this->getAno()
                );
              }

            }

            $gol = new Carro();
            // $gol->modelo = "Gol GT"; //Tentando acessar Direto observa que da um Erro Fatal. Que não pode acessar uma propriedade Privado na Classe Carro na variável $modelo.
            $gol->setModelo("Gol GT");
            $gol->setMotor("1.6");
            $gol->setAno("2018");

            print_r($gol->exibir());

            echo "<br>";

            echo "<strong>Resultado com var_dump:</strong> ";

            var_dump($gol->exibir());            

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