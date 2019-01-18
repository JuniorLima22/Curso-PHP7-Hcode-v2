<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 34</title>

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
        <h1>Métodos Mágicos</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Métodos Mágicos</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>Magical Methods</code>: Os nomes de função <code>__construct()</code>, <code>__destruct()</code>, <code>__call()</code>, <code>__callStatic()</code>, <code>__get()</code>, <code>__set()</code>, <code>__isset()</code>, <code>__unset()</code>, <code>__sleep()</code>, <code>__wakeup()</code>, <code>__toString()</code>, <code>__invoke()</code>, <code>__set_state()</code>, <code>__clone()</code> e <code>__debugInfo()</code> são mágicos nas classes do PHP. Não deve-se ter funções com esses nomes em nenhuma de suas classes a não ser que queira a funcionalidade mágica associada a eles.<br></small></h3>';

          echo '<h3><small>// <code>__construct()</code>: Ele é executado automáticamente quando a Classe é Instanciada.<br></small></h3>';

          echo '<h3><small>// <code>__destruct()</code>: È ultilizado quando o Objeto é destruido, ele é removido da memória. Isso pode acontecer de duas maneiras:<br>
                  // 1 - È quando a página chegar no fim da execução<br>
                  // 2 - Ou se voçê quiser que tire da memória, usando uma função chamada <code>UNSET</code> .<br></small></h3>';

          echo '<h3><small>// <code>__toString()</code>: è quando a gente pega um Objeto e Serializa ele, transforma ou converte em uma String. È o mesmo quando vai dar um <code>ECHO</code> ao invés de usar o <code>var_dump</code>.<br></small></h3>';

          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Criar um <code>Métodos Mágicos</code>.<br>";

            /////////////////// Métodos Estáticos //////////////////
            echo '<strong>Sintaxe da <code>public function __construct($a, $b, $c){}</code> </strong> <br><br>';
          ?>

            <pre>
              class Endereco{
                  private $logradouro;
                  private $numero;
                  private $cidade;

                  public function __construct($a, $b, $c){
                    $this->logradouro = $a;
                    $this->numero = $b;
                    $this->cidade = $c;
                  }

                  // È ultilizado quando o Objeto é destruido, ele é removido da memória
                  // Isso pode acontecer de duas maneiras:
                  // 1 - È quando a página chegar no fim da execução
                  // 2 - Ou se voçê quiser que tire da memória, usando uma função chamada UNSET
                  public function __destruct(){
                    var_dump("DESTRUIR");
                  }

                  public function __toString(){
                    return $this->logradouro.", ".$this->numero." - ".$this->cidade;
                  }
                } //End: class Endereco

                $meuEndereco = new Endereco("Rua Bezerra", "294", "Sobral-CE");

                <strong>Resultado <code>__construct</code>:</strong> var_dump($meuEndereco);

                <strong>Resultado <code>__toString()</code>:</strong> echo $meuEndereco;

                <strong>Resultado <code>__destruct()</code>:</strong> unset($meuEndereco);
            </pre>

          <?php
            echo "<strong>Resultado <code>__construct</code>:</strong> <br>";

                class Endereco{
                  private $logradouro;
                  private $numero;
                  private $cidade;

                  public function __construct($a, $b, $c){
                    $this->logradouro = $a;
                    $this->numero = $b;
                    $this->cidade = $c;
                  }

                  // È ultilizado quando o Objeto é destruido, ele é removido da memória
                  // Isso pode acontecer de duas maneiras:
                  // 1 - È quando a página chegar no fim da execução
                  // 2 - Ou se voçê quiser que tire da memória, usando uma função chamada UNSET
                  public function __destruct(){
                    var_dump("DESTRUIR");
                  }

                  public function __toString(){
                    return $this->logradouro.", ".$this->numero." - ".$this->cidade;
                  }
                } //End: class Endereco

                $meuEndereco = new Endereco("Rua Bezerra", "294", "Sobral-CE");

                var_dump($meuEndereco);

                echo "<br>";

                echo "<strong>Resultado <code>__toString()</code>:</strong> <br>";

                echo $meuEndereco;

                echo "<br>";

                echo "<strong>Resultado <code>__destruct()</code>:</strong> <br>";

                unset($meuEndereco);

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