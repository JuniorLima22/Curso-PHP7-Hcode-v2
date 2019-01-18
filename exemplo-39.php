<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 39</title>

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
        <h1>Polimorfismo</h1>
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