<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Herança";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
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