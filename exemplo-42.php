<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Programação Orientada a Objetos - Introdução";
  $tituloAula = "Usando Namespace";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Organizando as Classes e Diretórios</div>
    <div class="panel-body">

      <h3>
        <small>// <code>Namespace</code>: Ele permite agrupar as Classes dentro de diretórios de uma forma organizada, não adianta ter uma pasta com todas as Classes jogada lá dentro e achar que isso está organizado.<br>
        </small>
      </h3>

      <h3>
        <small>// <code>OBS</code>: Sempre recomendado fazer uma Documentação especficando cada arquivo, dessa forma você terá um codigo cada vez mais robusto e légivel.<br>
        </small>
      </h3>

      <h3><code>Nota</code>
        <small>// Olá pessoal<br>

          Se você estiver utilizando Linux ou Mac, pode se deparar com um erro ao reproduzir o exemplo da aula.<br>

          Para resolver esse problema, deixe a sua variável <code>$filename</code> no arquivo config.php assim:<br>

          <code>$filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");</code><br>

          Abraço :).<br>
        </small>
      </h3>

      <!-- Documentação -->
      <!-- <h4>Segue alguns links para consulta:<br></h4>
        <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
        <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
          

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Organizando as Classes e Diretórios.<br>

        <strong>Sintaxe da <code>$cad = new Cadastro();</code> </strong><br><br>

        <pre>
          <code class="php">
            require_once("assets/namespace/config.php");

            $cad = new Cadastro();

            $cad->setNome("Junior Lima");              
            $cad->setEmail("negstonseventos@hotmail.com");              
            $cad->setSenha("juniorlimajesusteama");

            echo $cad; 
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>class</code>:</strong> <br>";

          require_once("assets/namespace/config.php");

          $cad = new Cadastro();

          $cad->setNome("Junior Lima");              
          $cad->setEmail("negstonseventos@hotmail.com");              
          $cad->setSenha("juniorlimajesusteama");

          echo $cad;              

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Usando Namespace</div>
    <div class="panel-body">           

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Usar <code>namespace</code> das Classes Cadastro Geral e Cadastro Cliente para registrar uma Venda.<br>

        <strong>Sintaxe da <code>use Cliente\Cadastro;</code> </strong><br><br>

        <pre>
          <code class="php">
            require_once("assets/namespace/config.php");

            //Para utilizar o namespace precisa usar a palavra reservado (use)
            use Cliente\Cadastro;

            //Agora essa Class Cadastro se refere a Classe que esta dentro da pasta Cliente/Cadastro.php
            $cad = new Cadastro();

            $cad->setNome("Junior Lima");              
            $cad->setEmail("negstonseventos@hotmail.com");              
            $cad->setSenha("juniorlimajesusteama");

            $cad->registrarVenda(); 
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>namespace</code>:</strong> <br>";

          require_once("assets/namespace/config.php");

          //Para utilizar o namespace precisa usar a palavra reservado (use)
          use Cliente\Cadastro;

          //Agora essa Class Cadastro se refere a Classe que esta dentro da pasta Cliente/Cadastro.php
          $cad = new Cadastro();

          $cad->setNome("Junior Lima");              
          $cad->setEmail("negstonseventos@hotmail.com");              
          $cad->setSenha("juniorlimajesusteama");

          $cad->registrarVenda();              

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->