<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 37</title>

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
        <h1>Interface</h1>
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