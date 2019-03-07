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