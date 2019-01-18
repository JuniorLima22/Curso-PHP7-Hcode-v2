<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 38</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="assets/highlight/styles/monokai-sublime.css">
    <script src="assets/highlight/highlight.pack.js"></script>
  </head>
  <body>

    <?php 
      require_once ("menu.php");
    ?>

    <div class="container">
      
      <div class="page-header">
        <h1>Classe Abstrata</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Classe Abstrata</div>
        <div class="panel-body">

          <h3>
            <small>// <code>Classe Abstrata</code>: è semelhante a <code>Interface</code> a diferença básica é que na Classe Abstrata nós não só definimos quais são os métodos que precisão ter mais também difinimos o que eles fazem. A diferencia básica de uma Classe Abstrata pra uma Classe comum é que um Objeto nunca vai Instanciar uma Classe Abstrata, pra usá-la precido criar uma segunda Classe que vai Extender dessa Classe Abstrata.<br>
            </small>
          </h3>

          <h3>
            <small>// Diferença entre <code>Classe Abstrata</code> e <code>Interface</code>: È que uma Classe vai Herdar só de uma Classe Abastrata. Mais uma Classe pode implementar varias Interfaces. Um outro detalhe interessante a Interface ela só declara o que você precisa colocar na sua Classe. Já a Classe Abstrata depois que você definiu e Extendeu já podem ser ultilizados da maneira que foram definidos na Classe Abstrata.<br>
            </small>
          </h3>
          
          <div class='well well-sm'>
            <strong>Condições: </strong> <br>

            Criar um <code>abstract class</code> de Automovéis.<br>
            <strong>Sintaxe da <code>abstract class Automovel implements Veiculo {}</code> </strong><br><br>

            <pre>
              <code class="php">
                interface Veiculo {
                  public function acelerar($velocidade);
                  public function frenar($velocidade);
                  public function trocarMarcha($marcha);
                } // End: interface Veiculo

                abstract class Automovel implements Veiculo{
                  public function acelerar($velocidade){
                    echo "O veículo acelerou até ". $velocidade. " km/h";
                  }

                  public function frenar($velocidade){
                    echo "O veículo frenou até ". $velocidade. " km/h";
                  }

                  public function trocarMarcha($marcha){
                    echo "E o veículo engatou a marcha ". $marcha;
                  }
                } // End: abstract class Automovel implements Veiculo

                class DelRey extends Automovel {
                  public function empurrar(){

                  }
                } // End: class DelRey extends Automovel

                $carro = new DelRey();

                $carro->acelerar(200);

                $carro->frenar(80);
                
                $carro->trocarMarcha(4);
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>abstract</code>:</strong> <br>";

                interface Veiculo {
                  public function acelerar($velocidade);
                  public function frenar($velocidade);
                  public function trocarMarcha($marcha);
                } // End: interface Veiculo

                abstract class Automovel implements Veiculo{
                  public function acelerar($velocidade){
                    echo "O veículo acelerou até ". $velocidade. " km/h";
                  }

                  public function frenar($velocidade){
                    echo "O veículo frenou até ". $velocidade. " km/h";
                  }

                  public function trocarMarcha($marcha){
                    echo "E o veículo engatou a marcha ". $marcha;
                  }
                } // End: abstract class Automovel implements Veiculo

                class DelRey extends Automovel {
                  public function empurrar(){

                  }
                } // End: class DelRey extends Automovel

                $carro = new DelRey();

                $carro->acelerar(200);
                echo "<br>";

                $carro->frenar(80);
                echo "<br>";

                $carro->trocarMarcha(4);

              echo "<br>";
              ?>
          </div> <!-- End: .well well-sm -->
        </div> <!-- End: .panel-body -->
      </div> <!-- End: .panel panel-primary -->
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

    <script>hljs.initHighlightingOnLoad();</script>
  </body>
</html>