<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Gerenciando dependências com Composer";
  $tituloAula = "Trabalhando com Composer";
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

      <div class='well well-sm'>
        <h2>
          <small>// <code>Composer</code>: è uma gerenciador de dependências no PHP, via composer você cria um arquivo de configuração e quem for utilizar o projeto precisa desse outro arquivo pra ser configurado para o sistema funcione corretamente, é um controle de dependências e é feito em JSON<br>
          </small>
        </h2>

        <!-- Documentação -->
        <h3>Segue links para consulta:<br></h3>
        <h4>
          <small>COMPUSER:<code> <a href="https://getcomposer.org/" target="_blank">https://getcomposer.org/</a></code>
          </small><br><br>

          <small>PHP-FIG:<code> <a href="https://www.php-fig.org/" target="_blank">https://www.php-fig.org/</a></code> - Movendo o PHP para frente através de colaboração e padrões.
          </small><br>
        </h4>
      </div> <!-- End: .well well-sm -->

      <pre><strong>Visualizando arquivo composer</strong>
          <code class="json">
            {
              "name": "jrlima/composer",
              "description": "Aula de PHP 7",
              "type": "project",
              "authors": [
                  {
                      "name": "JuniorLima22",
                      "email": "negstonseventos@hotmail.com"
                  }
              ],
              "minimum-stability": "dev",
              "require": {
                  "monolog/monolog":"1.0.*"
              }
            }
          </code>
        </pre>


    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->