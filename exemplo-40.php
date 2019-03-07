<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Incluindo classes com Autoload";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Incluindo classes com Autoload</div>
    <div class="panel-body">

      <h3>
        <small>// <code>Autoload</code>: Como o próprio nome diz, Carregue Automáticamente. è uma Função colocado dentro do PHP pra que ele carregue as Classes automáticamente sem precisar do Require ou Include<br>
        </small>
      </h3>

      <h3>
        <small>// OBS sobre o <code>Autoload</code>: O <code>autoload</code> só sabe procurar as Classes no mesmo diretório. Ou você terá que configurar fazendo <code>if</code> ou varias outras válidações.<br>
        </small>
      </h3>

      <h3><code>Nota</code>
        <small>// Oi pessoal, tudo bem?<br>

          Nesta aula, no <code><a href="exemplo-40.php">Exemplo 40 - Incluindo classes com Autoload</code></a>, os professores apresentam a função <code>__autoload()</code>, muito usada para configurar o autoload de classes. Entretanto, essa função foi depreciada na versão 7.2 do PHP, o que pode gerar um erro em seu código.<br><br>
          O mais recomendado é que usemos a função <code>spl_autoload_register()</code>, que é explicada pelos professores no <code><a href="exemplo-41.php" target="_blank">Exemplo 41 - Incluindo classes com SPL_Autoload_Register</code></a>.<br>

          <!-- Documentação -->

          <h4>Segue alguns links para consulta:<br></h4>
          <h4>
            <small>Função Autoload:<code> <a href="https://secure.php.net/manual/pt_BR/function.autoload.php" target="_blank">https://secure.php.net/manual/pt_BR/function.autoload.php</a> </code></small></h4>

          <h4><small>Função SPL_Autoload_Register:<code> <a href="https://secure.php.net/manual/pt_BR/function.spl-autoload-register.php" target="_blank">https://secure.php.net/manual/pt_BR/function.spl-autoload-register.php</a> </code></small></h4>

          Bons estudos :).<br>
        </small>
      </h3>
      
      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar um <code>__autoload</code> das Classes DelRey e Automovéis.<br>

        <strong>Sintaxe da <code>function __autoload($nomeClasse){}</code> </strong><br><br>

        <pre>
          <code class="php">
            // Função Mágica
            function __autoload($nomeClasse){
              //Observe que ele traz o nome da Classe e serve para ter a certeza que incluiu todas as Classes
              // var_dump($nomeClasse);

              // Quando ele incluir o arquivo DelRey ele vai ver que está Extendendo da Classe Automovel
              // Ele vai chamar de novo o __autoload passando agora o Automovel
              require_once("assets/autoload/$nomeClasse.php");
            }

            $carro = new DelRey();

            $carro->acelerar(80);
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>autoload</code>:</strong> <br>";

          // Função Mágica
          function __autoload($nomeClasse){
            //Observe que ele traz o nome da Classe e serve para ter a certeza que incluiu todas as Classes
            // var_dump($nomeClasse);

            // Quando ele incluir o arquivo DelRey ele vai ver que está Extendendo da Classe Automovel
            // Ele vai chamar de novo o __autoload passando agora o Automovel
            require_once("assets/autoload/$nomeClasse.php");
          }

          $carro = new DelRey();

          $carro->acelerar(80);

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->