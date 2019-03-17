<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Criando Templates com RainTPL";
  $tituloAula = "Trabalhando com templates usando RainTPL";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
  <h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a><?=$tituloAula?></div>
    <div class="panel-body">

      <h2>
        <small><code>RainTPL</code>: é um recurso para templates, é utilizando quando à nescessidade de separar o código da parte visual do projeto.
        </small><br>
      </h2>

      <!-- Documentação -->
      <h4>Segue links para consulta:<br></h4>
      <h4>
        <small>RainTPL:<code> <a href="https://github.com/feulf/raintpl3" target="_blank">https://github.com/feulf/raintpl3</a></code>
        </small>
      </h4>

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Enviar E-mail usando a biblioteca PHPMail e utilizando o servidor do Gmail.<br>

        <strong>Sintaxe da <code>RainTPL</code> </strong><br><br>
      </div> <!-- End: .well well-sm -->

      <pre><strong>Arquivo do Composer</strong>
        <code class="json">
          {
            "require": {
                "rain/raintpl": ">=3.0.0"
            }
          }
        </code>
      </pre>

      <pre><strong>Instalando a dependencia RainTPL</strong>
        <code class="json">
          $ composer install
        </code>
      </pre>

      <pre><strong>Exemplo Simples - index.php</strong>
        <code class="php">
        require_once("vendor/autoload.php");

        // namespace
        use Rain\Tpl;
        // config
        $config = array(
            "tpl_dir"       => "tpl/",
            "cache_dir"     => "cache/",
            //"debug"         => true, // set to false to improve the speed
        );
        Tpl::configure( $config );
        // Add PathReplace plugin (necessary to load the CSS with path replace)
        //Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
        // create the Tpl object
        $tpl = new Tpl;
        // assign a variable
        $tpl->assign( "name", "Hcode" );
        $tpl->assign( "version", PHP_VERSION );
        // assign an array
        //$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
        // draw the template
        $tpl->draw( "index" );
        </code>
      </pre>

      <pre><strong>Exemplo Simples - index.html</strong>
        <code class="html">
          Hello {$name}
          Teste de Template!
          Versão do PHP: {$version}
        </code>
      </pre>

      <div class='well well-sm'>
        <strong>Resultado <code>RainTPL</code>:</strong><br>

        <div id="email"></div>                 
        <?php 
        //Recebe valor da pagina de envio de e-mail
        if (isset($_GET['m'])) {
          // echo $_GET['m'];
          echo "<br><div class=\"alert alert-info\" role=\"alert\"><strong>E-mail</strong> enviado com sucesso!</div>";
        }                    
        ?>

        <form method="GET">
          <div class="row">
            <div class="col-sm-8">
              <div class="mbr-buttons mbr-buttons--right">
                <a href="assets/rainTPL/Exemplo1-Simples/index.php" target="_blank"><button type="button" class="btn btn-primary">Exemplo Simples</button></a>
                <a href="index.php?pg=exemplo-76&m=email-enviado&#email"><button type="button" class="btn btn-primary">Exemplo Enviar E-mail</button></a>
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->