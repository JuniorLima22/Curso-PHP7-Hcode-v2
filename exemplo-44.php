<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Banco de Dados - MySQLi";
  $tituloAula = "Classe MySQLi e o PHP 7";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Classe MySQLi e o PHP 7</div>
    <div class="panel-body">

      <h3>
        <small>// <code>MySQLi</code>: No PHP 7 as funções que nós temos pra conversar com Bancos de Dados teve uma mundança significativa, se você já conhece PHP e tá se atualizando no PHP 7. Lembra aquelas funções <code>MySQLi</code>, <code>MySQL Connect</code> ou <code>MySQL Query</code> estas funções não existem mais no PHP 7. Você tem duas escolhas apenas para trabalhar com Bancos de Dados ou você usa a <code>Classe MySQLi</code> que é Orientado a Objeto ou <code>PDO</code> que é outra forma de conexão mais Abstrata você pode usar não somente para <code>MySQL</code> e sim para outros Bancos de Dados como: <code>SQL Server</code>, <code>PostgreSQL</code> inclusive é recomendado utilizar o <code>PDO</code>.<br>
        </small>
      </h3>

      <!-- Documentação -->
      <!-- <h4>Segue alguns links para consulta:<br></h4>
        <h4><small>Função Autoload:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4>
        <h4><small>Função SPL_Autoload_Register:<code> <a href="LINK" target="_blank">LINK</a></code></small></h4><br> -->
          

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Criar uma conexão com o Banco de Dados com o nome <code>dbphp7</code>.<br>

        <strong>Sintaxe da <code>$i = new mysqli("Servidor", "Usuário", "Senha", "Nome DB");</code> </strong><br><br>

        <pre>
          <code class="php">
            //Conexão com o Banco de Dados MySQL, deve-se passar alguns parâmetros
            //1 - é o servidor que você vai se conectar
            //2 - Usuário
            //3 - Senha
            //4 - Nome do Banco de Dados
            $conn = new mysqli("localhost", "root", "", "dbphp7"); 

            //Tratar se deu erro na conexão com o Banco de Dados
            if ($conn->connect_error) {
              echo "Error: " . $conn->connect_error;
              exit;
            }

            echo "Conectado com sucesso! Se não conectar ao Banco de Dados apresentara um Error".;
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>mysqli()</code>:</strong> <br>";

          //Conexão com o Banco de Dados MySQL, deve-se passar alguns parâmetros
          //1 - é o servidor que você vai se conectar
          //2 - Usuário
          //3 - Senha
          //4 - Nome do Banco de Dados
          $conn = new mysqli("localhost", "root", "", "dbphp7"); 

          //Tratar se deu erro na conexão com o Banco de Dados
          if ($conn->connect_error) {
            echo "Error: " . $conn->connect_error;
            exit;
          }

          echo "Conectado com sucesso! Se não conectar ao Banco de Dados apresentara um Error". "<br>";       

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>INSERT INTO - Inserindo dados Inserindo dados na Tabela</div>
    <div class="panel-body">           

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Inserir dados na Tabela do Banco de Dados com o nome <code>tb_usuarios</code>.<br>

        <strong>Sintaxe da <code>$i = new mysqli("Servidor", "Usuário", "Senha", "Nome DB");</code> </strong><br><br>

        <pre>
          <code class="php">
            //Conexão com o Banco de Dados MySQL, deve-se passar alguns parâmetros
            //1 - é o servidor que você vai se conectar
            //2 - Usuário
            //3 - Senha
            //4 - Nome do Banco de Dados
            $conn = new mysqli("localhost", "root", "", "dbphp7"); 

            //Tratar se deu erro na conexão com o Banco de Dados
            if ($conn->connect_error) {
              echo "Error: " . $conn->connect_error;
              exit;
            }

            //Inserindo dados no Banco de Dados
            //Método prepare() serve para você preparar um comando para enviar ao Bando de Dados
            $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

            //Método bind_param() esse método espera aqui como primeiro parâmetro os tipos de dados dessas Interrogações
            //Então o deslogin e o dessenha vão ser VARCHAR (texto) então basta colocar a primeira inicial do nome do tipo de dado
            //s - String
            //i - Inteiro
            //d - Float ou Double
            //b - Blob
            $stmt->bind_param("ss", $login, $pass);

            //Os paramêtros de bin_param tem que ser passados por referência ou seja dentro de uma Variável

            $login = "user2";
            $pass = "123456789";

            //Método execute(), executa a variavel $stmt para enviar para o Banco de Dados
            $stmt->execute();

            //Para acrescenta outros dados no BD no mesmo processo você não precisa colocar sua query tudo de novo
            //Basta acrescentar as varaveis com os dados e execute() novamente assim ira acrescentar dados ao BD

            $login = "root";
            $pass = "!@#$";

            $stmt->execute();
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>mysqli()</code>:</strong> <br>";

          //Conexão com o Banco de Dados MySQL, deve-se passar alguns parâmetros
          //1 - é o servidor que você vai se conectar
          //2 - Usuário
          //3 - Senha
          //4 - Nome do Banco de Dados
          $conn = new mysqli("localhost", "root", "", "dbphp7"); 

          //Tratar se deu erro na conexão com o Banco de Dados
          if ($conn->connect_error) {
            echo "Error: " . $conn->connect_error;
            exit;
          }

          //Inserindo dados no Banco de Dados
          //Método prepare() serve para você preparar um comando para enviar ao Bando de Dados
          $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

          //Método bind_param() esse método espera aqui como primeiro parâmetro os tipos de dados dessas Interrogações
          //Então o deslogin e o dessenha vão ser VARCHAR (texto) então basta colocar a primeira inicial do nome do tipo de dado
          //s - String
          //i - Inteiro
          //d - Float ou Double
          //b - Blob
          $stmt->bind_param("ss", $login, $pass);

          //Os paramêtros de bin_param tem que ser passados por referência ou seja dentro de uma Variável

          $login = "user2";
          $pass = "123456789";

          //Método execute(), executa a variavel $stmt para enviar para o Banco de Dados
          $stmt->execute();

          //Para acrescenta outros dados no BD no mesmo processo você não precisa colocar sua query tudo de novo
          //Basta acrescentar as varaveis com os dados e execute() novamente assim ira acrescentar dados ao BD

          $login = "root";
          $pass = "!@#$";

          $stmt->execute();

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>SELECT * FROM - Exibindo dados na Tabela</div>
    <div class="panel-body">           

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Exibir dados da Tabela.<br>

        <strong>Sintaxe da <code>query(SELECT * FROM tb_usuarios);</code> </strong><br><br>

        <pre>
          <code class="php">
            $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

            //Acessar os dados dentro da variavel $result              
            // while ($row = $result->fetch_array()) {
            //   var_dump($row);
            // }

            //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 1
            // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            //   var_dump($row);
            // }

            //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 2
            while ($row = $result->fetch_assoc()) {
              var_dump($row);
            }
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>SELECT * FROM tb_usuarios;</code>:</strong> <br>";

          $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

          //Acessar os dados dentro da variavel $result              
          // while ($row = $result->fetch_array()) {
          //   var_dump($row);
          // }

          //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 1
          // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          //   var_dump($row);
          // }

          //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 2
          while ($row = $result->fetch_assoc()) {
            var_dump($row);
          }

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Convertendo do dados na Tabela em JSON</div>
    <div class="panel-body">           

      <div class='well well-sm'>
        <strong>Condições: </strong> <br>
        Converter dados da Tabela em <code>JSON</code>.<br>

        <strong>Sintaxe da <code>json_decode();</code> </strong><br><br>

        <pre>
          <code class="php">
            $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

            $data = array();

            //Acessar os dados dentro da variavel $result              
            // while ($row = $result->fetch_array()) {
            //   var_dump($row);
            // }

            //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 1
            // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            //   var_dump($row);
            // }

            //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 2
            while ($row = $result->fetch_assoc()) {
              array_push($data, $row);
            }

            echo json_encode($data);
          </code>
        </pre>

        <?php
          echo "<strong>Resultado <code>json_decode();</code>:</strong> <br>";

          $result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

          $data = array();

          //Acessar os dados dentro da variavel $result              
          // while ($row = $result->fetch_array()) {
          //   var_dump($row);
          // }

          //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 1
          // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
          //   var_dump($row);
          // }

          //Se você quiser trazer somente os nomes sem os indices do Array basta você passar uma Constante pré defina do MySQLi modelo 2
          while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
          }

          echo json_encode($data);

          echo "<br>";
          ?>
      </div> <!-- End: .well well-sm -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->