<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Métodos Estáticos";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Métodos Estáticos</div>
    <div class="panel-body">
      <?php

      echo '<h3><small>// <code>static</code>: a vantagem dele é que voçê não precisa criar o Objeto pra Instanciar a Classe pra chamá-lo, além do que fica mais prático chamar dentro da própria Classe, fica mais organizado.<br></small></h3>';

      echo "<div class='well well-sm'>";

        echo "<strong>Condições: </strong> <br>";

        echo "Criar um Método<code>static</code> para válidar um CPF.<br>";

        /////////////////// Métodos Estáticos //////////////////
        echo '<strong>Sintaxe da <code>public static function validarCPF($cpf){}</code> </strong> <br><br>';
      ?>

        <pre>
          class Documento {
              private $numero;

              public function getNumero(){
                return $this->numero;
              }

              public function setNumero($numero){
                $resultado = Documento::validarCPF($numero);

                if ($resultado === false) {
                  throw new Exception("CPF informado não é válido!", 1);
                  
                }

                $this->numero = $numero;
              }

              public static function validarCPF($cpf):bool{
                  // Verifica se um número foi informado
                   if(empty($cpf)) {
                          return false;
                      }
                 
                  // Elimina possivel mascaras
                    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

                    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
                     
                  // Verifica se o numero de digitos informados é igual a 11
                    if (strlen($cpf) != 11) {
                        echo "length";
                        return false;
                    }
                    
                  // Verofica se nenhuma das sequencias invalidas abaixo
                  // foi digitada. Caso afirmativo retorna falso
                    else if ($cpf == '00000000000' || 
                        $cpf == '11111111111' || 
                        $cpf == '22222222222' || 
                        $cpf == '33333333333' || 
                        $cpf == '44444444444' || 
                        $cpf == '55555555555' || 
                        $cpf == '66666666666' || 
                        $cpf == '77777777777' || 
                        $cpf == '88888888888' || 
                        $cpf == '99999999999') {
                        return false;

                  // Calcula os digitos verificadores para verificar se o
                  // CPF é valido
                     } else {   
                         
                        for ($t = 9; $t < 11; $t++) {
                             
                            for ($d = 0, $c = 0; $c < $t; $c++) {
                                $d += $cpf{$c} * (($t + 1) - $c);
                            }
                            $d = ((10 * $d) % 11) % 10;
                            if ($cpf{$c} != $d) {
                                return false;
                            }
                        }
                 
                        return true;
                    }

              } //End: validarCPF

            } //End: class Documento

            $cpf = new Documento();
            $cpf->setNumero("36253203045");

            var_dump($cpf->getNumero());

            // Válidando CPF sem Instanciar a Classe Ultilizando apenas o Método Estático
            // No caso só retorna TRUE ou FALSE

            var_dump(Documento::validarCPF("36253203045"));
        </pre>

      <?php
        echo "<strong>Resultado 1:</strong> ";

            class Documento {
              private $numero;

              public function getNumero(){
                return $this->numero;
              }

              public function setNumero($numero){
                $resultado = Documento::validarCPF($numero);

                if ($resultado === false) {
                  throw new Exception("CPF informado não é válido!", 1);
                  
                }

                $this->numero = $numero;
              }

              public static function validarCPF($cpf):bool{
                  // Verifica se um número foi informado
                   if(empty($cpf)) {
                          return false;
                      }
                 
                  // Elimina possivel mascaras
                    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

                    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
                     
                  // Verifica se o numero de digitos informados é igual a 11
                    if (strlen($cpf) != 11) {
                        echo "length";
                        return false;
                    }
                    
                  // Verofica se nenhuma das sequencias invalidas abaixo
                  // foi digitada. Caso afirmativo retorna falso
                    else if ($cpf == '00000000000' || 
                        $cpf == '11111111111' || 
                        $cpf == '22222222222' || 
                        $cpf == '33333333333' || 
                        $cpf == '44444444444' || 
                        $cpf == '55555555555' || 
                        $cpf == '66666666666' || 
                        $cpf == '77777777777' || 
                        $cpf == '88888888888' || 
                        $cpf == '99999999999') {
                        return false;

                  // Calcula os digitos verificadores para verificar se o
                  // CPF é valido
                     } else {   
                         
                        for ($t = 9; $t < 11; $t++) {
                             
                            for ($d = 0, $c = 0; $c < $t; $c++) {
                                $d += $cpf{$c} * (($t + 1) - $c);
                            }
                            $d = ((10 * $d) % 11) % 10;
                            if ($cpf{$c} != $d) {
                                return false;
                            }
                        }
                 
                        return true;
                    }

              } //End: validarCPF

            } //End: class Documento

            $cpf = new Documento();
            $cpf->setNumero("36253203045");

            var_dump($cpf->getNumero());

            echo "<br>";

            echo "<strong>Resultado 2: <small>// Válidando CPF sem Instanciar a Classe Ultilizando apenas o método Estático. No caso só retorna TRUE ou FALSE.<br></small></strong> ";

            // Válidando CPF sem Instanciar a Classe Ultilizando apenas o Método Estático
            // No caso só retorna TRUE ou FALSE
            var_dump(Documento::validarCPF("36253203045"));


        echo "<br>";
      echo "</div>";

      ?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- END: Exemplos -->