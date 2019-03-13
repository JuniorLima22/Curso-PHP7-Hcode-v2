<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Gerando Boletos com o BoletoPHP";
  $tituloAula = "Boleto PHP";
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
        <small>// <code>Boleto PHP</code>: 
          <p>Projeto Código-Aberto de Sistema de Boletos bancários em PHP</p>

          <p>Qual o principal motivo deste projeto?
          Este projeto foi criado por Elizeu Alcantara desde Maio/2006 e teve origem do Projeto BBBoletoFree que tiveram colaborações de Daniel William Schultz e Leandro Maniezo que por sua vez foi derivado do PHPBoleto de João Prado Maia e Pablo Martins F. Costa.</p>

          <p>Criar um sistema de geração de Boletos que seja mais simples do que o PhpBoleto e que se estenda ao desenvolvimento de boletos dos bancos mais usados no mercado, além do Banco do Brasil do projeto BBBoletoFree. Este sistema é de Código Aberto e de Livre Distribuição conforme Licença GPL.</p>
        </small>
      </h2>

      <h2>
        <small>// <code>Boleto sem Registro</code>: O boleto sem registro é aquele que é emitido do seu site (sistema) e você não precisa informar ao banco, então o banco so vai descobrir que esse boleto foi gerado quando efetuarem o pagamento do boleto<br>
        </small>
      </h2>

      <h2>
        <small>// <code>Boleto com Registro</code>: O boleto com registro e quando é emitido o boleto e é informado ao banco, nesse caso o banco recebe um arquivo de remessa e fica esperando so boletos que seram pagos, pra isso você precisa ter uma integração com o banco, você terá que contactar o gerente e ele lhe entregara um manual de integração com o banco.<br>
        </small>
      </h2>

      <!-- Documentação -->
      <h4>Segue links para consulta:<br></h4>
        <h4><small>boletophp:<code> <a href="https://github.com/CobreGratis/boletophp" target="_blank">https://github.com/CobreGratis/boletophp</a></code></small><br>
      </h4>

      <!-- Begin: Painel grupo Lista -->
      <div class=panel-group role=tablist>
        <div class="panel panel-primary">
          <div class="collapse in panel-collapse" role=tabpanel id=collapseListGroup1 aria-labelledby=collapseListGroupHeading1>
            <ul class=list-group>
              <li class=list-group-item><a href="assets/boletoPHP/boleto_itau.php" target="_blank">Exemplo 1 - Boleto Ítau</a></li>
              <li class=list-group-item><a href="assets/boletoPHP/boleto_bradesco.php" target="_blank">Exemplo 2 - Boleto Bradesco</a></li>
              <li class=list-group-item><a href="assets/boletoPHP/boleto_nossacaixa.php" target="_blank">Exemplo 3 - Boleto Nossa Caixa</a></li>
              <li class=list-group-item><a href="assets/boletoPHP/boleto_bb.php" target="_blank">Exemplo 4 - Boleto Banco do Brasil</a></li>
              <li class=list-group-item><a href="assets/boletoPHP/boleto_hsbc.php" target="_blank">Exemplo 5 - Boleto HSBC</a></li>
            </ul>
            <!-- <div class=panel-footer>Footer</div> -->
          </div>
        </div>
      </div>
      <!-- End: Painel grupo Lista -->
    </div> <!-- End: .panel-body -->
  </div> <!-- End: .panel panel-primary -->
  <!-- END: .panel -->

  <!-- END: Exemplos -->