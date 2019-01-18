<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Curso Udemy PHP 7 - Exemplo 27</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php 
      require_once ("menu.php");
    ?>

    <div class="container">
      
      <div class="page-header">
        <h1>Função date() e a Função Time()</h1>
      </div>

		<!-- BEGIN: Exemplos -->
			<h4>Exemplos</h4>

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função date()</div>
        <div class="panel-body">
          <?php

          // Documentação
          echo '<h4>Função Date():<small><code> <a href="http://php.net/manual/pt_BR/function.date.php" target="_blank">http://php.net/manual/pt_BR/function.date.php</a> </code></small></h4>';

          echo '<h3><small>// <code>DATE</code>: contém apenas uma data civil, sem qualquer consideração de fuso horário, etc. Por exemplo, data de nascimento, ou a data de vencimento de uma conta, ou um prazo legal, é <code>DATE</code>.<br>
            <code>DATETIME</code>: contém data e hora civis, novamente sem considerar fuso horário. Se por exemplo o prazo de pagamento é "dia tal até 13:00", é responsabilidade do pagador saber se estamos no horário de verão ou não..</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Exibir Função <code>date</code>.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>date()</code>: </strong> <br><br>";

            echo '<code>echo date("d/m/Y - H:i:s");</code><br><br>';

            echo "<strong>Resultado 1:</strong> ";

            echo date("d/m/Y - H:i:s");

            echo "<br>";
          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Timestamp</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>TIMESTAMP</code>: é um número que determina um momento específico. Tipicamente é expresso como o "número de segundos desde 1/1/1970 00:00 em Londres", mas poderia ser qualquer outra base. A ideia do timestamp é que ele vale no mundo todo, ou seja, ele identifica o momento exato em que algo aconteceu. Um acontecimento com timestamp "0" aconteceu em 31/12/1969 às 21:00 no Brasil.<br><br>

            O <code>timestamp</code> é útil para registrar log, e para determinar se A aconteceu antes ou depois de B, mesmo que A e B tenham acontecido em lados opostos do planeta. Por outro lado, o <code>timestamp</code> é inadequado para registrar datas e horas "civis" porque a hora e até a data muda conforme o fuso horário em que o timestamp é interpretado.<br><br>

            Nem sempre a melhor opção é óbvia. Por exemplo, registrar a data de nascimento com <code>DATETIME</code> ou <code>TIMESTAMP</code>? De um ponto de vista matemático, o <code>TIMESTAMP</code> seria ideal porque um bebê nasce num momento bem determinado. Por outro lado, a data e hora de nascimento têm efeitos civis - colocar a data de nascimento diferente da Carteira de Identidade pode causar um monte de aborrecimentos - então é melhor usar <code>DATETIME</code> e o local de nascimento, já que o fuso horário é de conhecimento público..</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Obter o <code>Timestamp</code>.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>time()</code>: </strong> <br><br>";

            echo '<code>echo time();;</code><br><br>';

            echo "<strong>Timestamp atual:</strong> ";

            echo time();

            echo "<br>";
          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Timestamp Fixo</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>TIMESTAMP</code> Hcode: A <code>Unix</code> <code>timestamp</code> teve inicio em 01/01/1970, por que é a partir dessa data no padrão UTC no caléndario Gregoriano que marca o Zero dado pelo sistema de caléndario <code>Unix</code> conhecido também como <code>Posix</code>. O <code>PHP</code> é basiado em linguagem <code>C</code> e por extenção no ambiente <code>Unix</code>, por isso que ele usa na parte de Data e Hora o <code>Timestamp</code> como referência.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Obter o <code>Timestamp</code> Fixo.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>time()</code>: </strong> <br><br>";

            echo '<code>echo date("d/m/Y - H:i:s", 1536265750);</code><br><br>';

            echo "<strong>Timestamp Fixo:</strong> ";
            
            echo date("d/m/Y - H:i:s", 1536265750);

            echo "<br>";
          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função com <code>date()</code></div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>TIMESTAMP</code> Hcode: A <code>Unix</code> <code>timestamp</code> teve inicio em 01/01/1970, por que é a partir dessa data no padrão UTC no caléndario Gregoriano que marca o Zero dado pelo sistema de caléndario <code>Unix</code> conhecido também como <code>Posix</code>. O <code>PHP</code> é basiado em linguagem <code>C</code> e por extenção no ambiente <code>Unix</code>, por isso que ele usa na parte de Data e Hora o <code>Timestamp</code> como referência.</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Obter o <code>Timestamp</code> Fixo e acrescentando o dia da semana.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>time()</code>: </strong> <br><br>";

            echo '<code>$ts = strtotime("2001-09-11");</code><br><br>';
            echo '<code>echo date("l, d/m/Y", $ts);</code><br><br>';

            echo "<strong>Timestamp Fixo:</strong> ";
            
            $ts = strtotime("2001-09-11");

            echo date("l, d/m/Y", $ts);

            echo "<br>";
          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- BEGIN: .panel -->
      <div class="panel panel-primary">
        <div class="panel-heading"><a href="" id="tiposBasicos"></a>Função com <code>date()</code> - Escrevendo Expressões</div>
        <div class="panel-body">
          <?php

          echo '<h3><small>// <code>TIMESTAMP</code> Hcode: Voçê pode escrever expressões, ele vai gerar o <code>TIMESTAMP</code> pra voçê e depois com esse <code>TIMESTAMP</code> voçê faz qualquer Data .</small></h3>';
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Obter o <code>Timestamp</code> de agora.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>time()</code>: </strong> <br><br>";

            echo '<code>$tempoAgora = strtotime("now");</code><br><br>';
            echo '<code>echo date("l, d/m/Y", $tempoAgora);</code><br><br>';

            echo "<strong>Timestamp Fixo:</strong> ";
            
            $tempoAgora = strtotime("now");

            echo date("l, d/m/Y", $tempoAgora);

            echo "<br>";
          echo "</div>";

          ?>
        </div>

        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Obter o <code>Timestamp</code> atual e acrescentando mais 1 dia.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>time()</code>: </strong> <br><br>";

            echo '<code>$tempoAgora = strtotime("+1 day");</code><br><br>';
            echo '<code>echo date("l, d/m/Y", $tempoAgora);</code><br><br>';

            echo "<strong>Timestamp Fixo:</strong> ";
            
            $tempoAgora = strtotime("+1 day");

            echo date("l, d/m/Y", $tempoAgora);

            echo "<br>";
          echo "</div>";

          ?>
        </div>

        <div class="panel-body">
          <?php
          
          echo "<div class='well well-sm'>";

            echo "<strong>Condições: </strong> <br>";

            echo "Obter o <code>Timestamp</code> atual e acrescentando mais 1 semana.<br>";

            /////////////////// Date //////////////////
            echo "<strong>Sintaxe da <code>time()</code>: </strong> <br><br>";

            echo '<code>$tempoAgora = strtotime("+1 week");</code><br><br>';
            echo '<code>echo date("l, d/m/Y", $tempoAgora);</code><br><br>';

            echo "<strong>Timestamp Fixo:</strong> ";
            
            $tempoAgora = strtotime("+1 week");

            echo date("l, d/m/Y", $tempoAgora);

            echo "<br>";
          echo "</div>";

          ?>
        </div>
      </div>
      <!-- END: .panel -->

      <!-- END: Exemplos -->

			<hr>

			<div class="col-sm-6">
	      <a href="index.php"><button class="btn btn-primary">Voltar</button></a>
	    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>