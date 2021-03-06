<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Trabalhando com Funções em PHP";
  $tituloAula = "Função Recursivas";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

<!-- BEGIN: .panel -->
<div class="panel panel-primary">
<div class="panel-heading"><a href="" id="tiposBasicos"></a>Funções Recursivas</div>
<div class="panel-body">
  <?php

  echo '<h3><small>// Ultilizado para recurso conhecido como Trivil ou Hierarquia.</small></h3>';
  
  echo "<div class='well well-sm'>";

    echo "<strong>Condições: </strong> <br>";

    echo "Exibir uma lista no modo Hierárquico com <code>function</code> Recursiva.<br>";

    /////////////////// Function //////////////////
    echo "<strong>Sintaxe da <code>function</code>: </strong> <br><br>";
  ?>

  	<!-- Begin: Sintaxe do Codigo -->
    <code>
        $hierarquia = array(<br>
        	array(<br>
        		'nome_cargo' => 'CEO',<br>
        		'subordinados' => array(<br>
        				//Begin: Diretor Comercial<br>
        			array(<br>
        				'nome_cargo' => 'Diretor Comercial',<br>
        				'subordinados' => array(<br>
            				//Begin: Gerente de Vendas<br>
            						array(<br>
            							'nome_cargo' => 'Gerente de Vendas'<br>
            						)<br>
            				//End: Gerente de Vendas<br>
        				)<br>
        			),<br>
        			//End: Diretor Comercial<br><br>

        			//Begin: Diretor Financeiro<br>
        			array(<br>
        				'nome_cargo' => 'Diretor Financeiro',<br>
        				'subordinados' => array(<br>
        						//Begin: Gerente de Contas a Pagar<br>
        						array(<br>
        								'nome_cargo' => 'Gerente de Contas a Pagar',<br>
        								'subordinados' => array(<br>
        									//Begin: Supervidor de Pagamentos<br>
        										array(<br>
        											'nome_cargo' => 'Supervisor de Pagamento'<br>
        										)<br>
        								)//End: Supervidor de Pagamentos<br>
        						)<br>
        						//End: Gerente de Contas a Pagar<br>
        				)<br>
        			),<br>
        			//End: Diretor Financeiro<br><br>

        			//Begin: Gerente de Compras<br>
        			array(<br>
        				'nome_cargo' => 'Gerente de Compras',<br>
        				'subordinados' => array(<br>
        					//Begin: Supervidor de Suprimentos<br>
        						array(<br>
        							'nome_cargo' => 'Supervidor de Suprimentos'<br>
        						)<br><br>
        					
            				)<br>
            				//End: Supervidor de Suprimentos<br>
        			)<br>
        			//End: Gerente de Compras<br>
        		)<br>
        	)<br>
        );<br><br>
    </code>
    <!-- End: Sintaxe do Codigo -->

    <!-- Begin: Chamada da Função-->
        <strong>Chamada da Função:</strong><br>
        <code>
        		function exibe($cargos){<br>
            	$html = '&ltul&gt';<br><br>

            		foreach ($cargos as $cargo){<br>
            			$html .= "&ltli&gt";<br>
            			$html .= $cargo['nome_cargo'];<br><br>

            				if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {<br>
            					$html .= exibe($cargo['subordinados']);<br>
            				}<br><br>

            			$html .= "&lt/li&gt";<br><br>

            		}<br><br>

            	$html .= "&lt/ul&gt";<br><br>

            	return $html;<br>
            }<br><br>

            echo exibe($hierarquia);<br>
        </code>
    <!-- End: Chamada da Função-->

   <?php

    $hierarquia = array(
    	array(
    		'nome_cargo' => 'CEO',
    		'subordinados' => array(
    				//Begin: Diretor Comercial
    			array(
    				'nome_cargo' => 'Diretor Comercial',
    				'subordinados' => array(
        				//Begin: Gerente de Vendas
        						array(
        							'nome_cargo' => 'Gerente de Vendas'
        						)
        				//End: Gerente de Vendas
    				)
    			),
    			//End: Diretor Comercial

    			//Begin: Diretor Financeiro
    			array(
    				'nome_cargo' => 'Diretor Financeiro',
    				'subordinados' => array(
    						//Begin: Gerente de Contas a Pagar
    						array(
    								'nome_cargo' => 'Gerente de Contas a Pagar',
    								'subordinados' => array(
    									//Begin: Supervidor de Pagamentos
    										array(
    											'nome_cargo' => 'Supervisor de Pagamento'
    										)
    								)//End: Supervidor de Pagamentos
    						)
    						//End: Gerente de Contas a Pagar
    				)
    			),
    			//End: Diretor Financeiro

    			//Begin: Gerente de Compras
    			array(
    				'nome_cargo' => 'Gerente de Compras',
    				'subordinados' => array(
    					//Begin: Supervidor de Suprimentos
    						array(
    							'nome_cargo' => 'Supervidor de Suprimentos'
    						)
    					
        				)
        				//End: Supervidor de Suprimentos
    			)
    			//End: Gerente de Compras
    		)
    	)
    );

    echo "<br>";

    echo "<strong>Resultado:</strong> ";

    function exibe($cargos){
    	$html = '<ul>';

    		foreach ($cargos as $cargo){
    			$html .= "<li>";
    			$html .= $cargo['nome_cargo'];

    				if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
    					$html .= exibe($cargo['subordinados']);
    				}

    			$html .= "</li>";

    		}

    	$html .= "</ul>";

    	return $html;
    }

    echo exibe($hierarquia);

  echo "</div>";

  ?>
</div>
</div>
<!-- END: .panel -->

<!-- END: Exemplos -->