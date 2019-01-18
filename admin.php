<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Curso Udemy PHP 7 - Hcode</title>
        <meta name="description" content="Pushy is an off-canvas navigation menu for your website.">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

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

        <!-- Menu Pushy -->
        <link rel="stylesheet" href="assets/pushyMenu/css/normalize.css">
        <link rel="stylesheet" href="assets/pushyMenu/css/demo.css">
        <!-- Pushy CSS -->
        <link rel="stylesheet" href="assets/pushyMenu/css/pushy.css">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body>

        

        <!-- Begin: Pushy Menu -->
          <?php require_once ("header.php"); ?>
          <?php require_once ("menu.php"); ?>
        <!-- End: Pushy Menu -->

        <!-- Site Overlay -->
        <div class="site-overlay"></div>

        <!-- Begin: Content -->
        <div id="container">
          <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>

          <div class="page-header">
            <h1>Administrador</h1>
          </div>

            <!-- BEGIN: .panel -->
            <div class="panel panel-primary">
              <div class="panel-heading"><a href="" id="tiposBasicos"></a>Controle de Versão</div>
              <div class="panel-body">

                <div class='well well-sm'>

                  <pre>
                    <code class="php">
                  2.1.3 (11BCF) <- Número de compilação, deve corresponder a uma revisão no controle de origem
                  ^ ^ ^
                  | | |
                  | | +--- REVISÃO: Acrescenta-se um numero a REVISÃO se o projeto for uma correção de funcionalidades já existentes.
                  | +----- RELEASE: Acrescenta-se um numero a RELEASE se o projeto for uma melhoria (ex: exclusão ou inclusão de novas funcionalidades).
                  +------- VERSÃO: Acrescenta-se um numero a VERSÃO se o projeto for uma evolução.
                    </code>
                  </pre>

                  <form method="POST">
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="mbr-buttons mbr-buttons--right">
                          <input name="revisao" class="mbr-buttons__btn btn btn-primary" type="submit" value="Adcionar revisão">
                          <input name="release" class="mbr-buttons__btn btn btn-warning" type="submit" value="Adcionar release">
                          <input name="versao" class="mbr-buttons__btn btn btn-danger" type="submit" value="Adcionar versão">
                        </div>
                      </div>
                    </div><!-- End: .row -->
                  </form>

                  <?php
                    $revisao = isset($_POST['revisao']);
                    $release = isset($_POST['release']);
                    $versao = isset($_POST['versao']);

                    //Exibe resultado revisao
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idrevisao DESC LIMIT 1");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      //O fetchAll ele já vai fatiar todas as linhas do banco de dados,
                      //diferente do MySQLi que nescessita de um Whilw para ir passando de linha e linha para trazer o resultado na tela.
                      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // var_dump($results);
                      // print_r($results[0]["idrevisao"]);
                      $resultRevisao = $results[0]["idrevisao"];
                    //End: resultado revisao

                    if ($revisao) {
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

                      // echo "Conectado com sucesso! Se não conectar ao Banco de Dados apresentara um Error";

                      $stmt = $conn->prepare("INSERT INTO versao (idrevisao) VALUES ($resultRevisao+1)");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      echo "<br><div class=\"alert alert-info\" role=\"alert\">Atualizado <strong>revisão</strong> com sucesso!</div>";                        
                    } //End: $revisao

                    //Exibe resultado revisao
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idrevisao DESC LIMIT 1");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      //O fetchAll ele já vai fatiar todas as linhas do banco de dados,
                      //diferente do MySQLi que nescessita de um Whilw para ir passando de linha e linha para trazer o resultado na tela.
                      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // var_dump($results);
                      // print_r($results[0]["idrevisao"]);
                      $resultRevisao = $results[0]["idrevisao"];
                    //End: resultado revisao

                    //Exibe resultado release
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idrelease DESC LIMIT 1");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      //O fetchAll ele já vai fatiar todas as linhas do banco de dados,
                      //diferente do MySQLi que nescessita de um Whilw para ir passando de linha e linha para trazer o resultado na tela.
                      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // var_dump($results);
                      // print_r($results[0]["idrelease"]);
                      $resultRelease = $results[0]["idrelease"];                
                    //End resultado release

                    if ($release) {
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("INSERT INTO versao (idrelease) VALUES ($resultRelease+1)");
                      $stmt->execute();
                      echo "<br><div class=\"alert alert-warning\" role=\"alert\">Atualizado <strong>release</strong> com sucesso!</div>"; 
                    } //End: release

                    //Exibe resultado release
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idrelease DESC LIMIT 1");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      //O fetchAll ele já vai fatiar todas as linhas do banco de dados,
                      //diferente do MySQLi que nescessita de um Whilw para ir passando de linha e linha para trazer o resultado na tela.
                      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // var_dump($results);
                      // print_r($results[0]["idrelease"]);
                      $resultRelease = $results[0]["idrelease"];                
                    //End resultado release

                    //Exibe resultado versao
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idversao DESC LIMIT 1");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      //O fetchAll ele já vai fatiar todas as linhas do banco de dados,
                      //diferente do MySQLi que nescessita de um Whilw para ir passando de linha e linha para trazer o resultado na tela.
                      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // var_dump($results);
                      // print_r($results[0]["idrevisao"]);
                      $resultVersao = $results[0]["idversao"];
                    //End: resultado revisao

                    if ($versao) {
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("INSERT INTO versao (idversao) VALUES ($resultVersao+1)");
                      $stmt->execute();
                      echo "<br><div class=\"alert alert-danger\" role=\"alert\">Atualizado <strong>versão</strong> com sucesso!</div>"; 
                    }

                    //Exibe resultado versao
                      $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
                      $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idversao DESC LIMIT 1");

                      //Pra executar o comando ao banco de dados
                      $stmt->execute();

                      //O fetchAll ele já vai fatiar todas as linhas do banco de dados,
                      //diferente do MySQLi que nescessita de um Whilw para ir passando de linha e linha para trazer o resultado na tela.
                      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

                      // var_dump($results);
                      // print_r($results[0]["idrevisao"]);
                      $resultVersao = $results[0]["idversao"];
                    //End: resultado revisao
                  ?>

                  <br><strong>Versão atual <code><?php echo $resultVersao. ".". $resultRelease. ".". $resultRevisao; ?></code></strong><br>
                </div> <!-- End: .well well-sm -->
              </div> <!-- End: .panel-body -->
            </div> <!-- End: .panel panel-primary -->
            <!-- END: .panel -->

            <!-- END: Exemplos -->

            <!-- Menu Button -->
          <button class="menu-btn">&#9776; Menu</button>
        </div><!-- End: Content -->

        <?php require_once ("footer.php"); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>

        <script>hljs.initHighlightingOnLoad();</script>

        <!-- Pushy JS -->
        <script src="assets/pushyMenu/js/pushy.min.js"></script>

    </body>
</html>
