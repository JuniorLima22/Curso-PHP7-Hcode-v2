<?php
  $linkModulo = "index.php?#collapseListGroup4";
  $tituloModulo = "Variáveis";
  $tituloAula = "Padrões de Variáveis";
?>

<?php require_once ("breadcrumb.php"); ?>

<div class="page-header">
  <h1><?=$tituloAula?></h1>
</div>

  <!-- BEGIN: .panel -->
  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Padrões de Variáveis</div>
    <div class="panel-body">
			<?php 
				$anoNascimento = 1990;

				$nomeCompleto = "Francisco Lima Cordeiro Júnior";

				echo "$anoNascimento".","." "."$nomeCompleto";

			 ?>
    </div>
  </div>
  <!-- END: .panel -->

<!-- BEGIN: Exemplos -->
	<h4>Exemplos</h4>

	  <div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>PHP Não aceita</div>
    <div class="panel-body">
			<?php 

				//Padroes de variaveis
				
				$nome1 = "Júnior Lima";
				echo "Correto: ". '<code>$nome1 = Júnior Lima</code>'. " = $nome1";

				echo "<br>";

				// PHP Não aceita número antes
				echo "PHP Não aceita Número antes: <code>$1nome = Junior</code>"; 

				echo "<br>";

				// PHP Não aceita caracteres
				echo "PHP Não aceita Caracteres antes: <code>$%nome = Junior</code>";
			 ?>
    </div>
  </div>
	
	<!-- BEGIN: .panel -->
	<div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Limpar ou Destroi a Variável</div>
    <div class="panel-body">
			<?php 

			// Limpa(destroi) a variavel ou seja elimina a variavel da memoria	
				unset($nome1);
				echo "<h5><small>// Limpa (Destroi) a variavel ou seja elimina a variavel da memória.</small></h5>";
				echo "Limpa/Destroi: <code>unset(". '$nome1'. ")</code>";

			?>
    </div>
  </div>
  <!-- END: .panel -->

  <!-- BEGIN: .panel -->
	<div class="panel panel-primary">
    <div class="panel-heading"><a href="" id="tiposBasicos"></a>Pra saber se a variável existe</div>
    <div class="panel-body">
			<?php 

		//Pra saber se a variavel existe
				if (isset($nome1)) {
					echo "$nome1";
				}

			echo "<h5><small>// Pra saber se a variavel existe.</small></h5>";

			echo "<code>(isset(". '$nome1'. ")) {</code>";
			echo "<br>";
			echo "<code>echo ". '$nome1'. ";</code>";
			echo "<br>";
			echo "<code>}</code>";

			?>
    </div>
  </div>
  <!-- END: .panel -->

  <hr>

  <!-- END: Exemplos -->