<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Criando Diretórios Virtuais com o Apache";
  $tituloAula = "Utilizando o Apache para criar Virtual Hosts";
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
        <small><code>Virtual Host</code>: é util para criar vários diretórios virtuais tanto na máquina local como em servidores em nuvens.
        </small><br>
      </h2>

      <!-- Documentação -->
      <h4>Segue links para consulta:<br></h4>
      <h4>
        <small>tituloExemplo:<code> <a href="LinkExemplo" target="_blank">LinkExemplo</a></code>
        </small>
      </h4>

      <pre><strong>Arquivo na pasta do apache (C:\xampp\apache\conf\extra\httpd-vhosts.conf)</strong>
        <code class="json">
          < VirtualHost *:80>
            ServerAdmin webmaster@dummy-host2.example.com
            DocumentRoot "C:/xampp/htdocs"
            ServerName jrlima.jl
            ErrorLog "logs/dummy-host2.example.com-error.log"
            CustomLog "logs/dummy-host2.example.com-access.log" common
            < Directory "C:/xampp/htdocs">
              Order allow,deny
              Allow from all
              Require all granted
            < /Directory>
          < /VirtualHost>
        </code>
      </pre>

      <pre><strong>Arquivo na pasta do windowns (C:\Windows\System32\drivers\etc\host)</strong>
        <code class="json">          
          127.0.0.1 localhost
          ::1 localhost

          127.0.0.1 jrlima.jl
        </code>
      </pre>

      <div class='well well-sm'>
        <strong>Acessar seus projeto pela URL <code><a href="http://jrlima.jl" target="_blank">http://jrlima.jl</a></code> ou <code><a href="http://localhost" target="_blank">http://localhost</a></code></strong><br>

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
                <a href="http://jrlima.jl/udemy/PHP/Hcode-PHP-7-v2.0.0/assets/webSite" target="_blank"><button type="button" class="btn btn-primary">Exemplo Virtual Hosts</button></a>
              </div>
            </div>
          </div><!-- End: .row -->
        </form>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->