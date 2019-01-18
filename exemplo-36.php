<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 36</title>

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
        <h1>Herança</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Herança</div>
        <div class="panel-body">

          <h3>
            <small>// <code>Herança</code>: È quando uma Classe Herda <code>Atributo</code> e <code>Métodos</code> desde de que sejam <code>public</code> ou <code>protected</code> de uma Classe Pai. È um conceito muito interessante na Orientação a Objeto, porque as vezes uma Classe ela pode ser usada pra varios segmentos.<br>
            </small>
          </h3>

          <h3>
            <small>// Classe Filha acessa todos os <code>Atributo</code> e <code>Métodos</code> da Classe Pai porém a Classe Pai não acessa os <code>Atributo</code> e <code>Métodos</code> da Classe Filha.<br>
            </small>
          </h3>          

          <h3>
            <small>// <code>Estudar!!!</code>: Sobre uma Linguagem de Modelagem de Dados chamada <code>UML</code>.<br>
            </small>
          </h3>

          <h3>
            <small>// <code>Capricho</code>: Capricho é você fazer o teu melhor na condição que você tem enquanto não tem condições melhores para fazer melhor ainda. <code>Mario Sergio Cortella</code>.<br>
            </small>
          </h3>
          
          <div class='well well-sm'>
            <strong>Condições: </strong> <br>

            Criar um <code>Encapsulamento</code>.<br>
            <strong>Sintaxe da <code>class nomeDaClass {}</code> </strong><br><br>

            <pre>
              <code class="php">
                class Documento {
                  private $numero;

                  public function getNumero(){
                    return $this->numero;
                  }

                  public function setNumero($n){
                    $this->numero = $n;
                  }
                } // End: class Documento

                class CPF extends Documento {
                  public function validar():bool{
                    $numeroCPF = $this->getNumero();
                    // Aqui vai a Validação do CPF
                    return true;
                  }
                } // End: class cpf extends Documento

                $doc = new CPF();
                $doc->setNumero("111222333-44");
                var_dump ($doc->validar());

                echo $doc->getNumero();
              </code>
            </pre>

            <?php
              echo "<strong>Resultado <code>public</code>:</strong> <br>";

                  class Documento {
                    private $numero;

                    public function getNumero(){
                      return $this->numero;
                    }

                    public function setNumero($n){
                      $this->numero = $n;
                    }
                  } // End: class Documento

                  class CPF extends Documento {
                    public function validar():bool{
                      $numeroCPF = $this->getNumero();
                      // Aqui vai a Validação do CPF
                      return true;
                    }
                  } // End: class cpf extends Documento

                  $doc = new CPF();
                  $doc->setNumero("111222333-44");
                  var_dump ($doc->validar());

                  echo "<br>";

                  echo $doc->getNumero();

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