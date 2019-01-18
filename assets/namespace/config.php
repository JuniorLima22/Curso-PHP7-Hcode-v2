<?php 
	spl_autoload_register(function($nameClass){

		//Para ver como funciona o Include do namespace
		// var_dump($nameClass);

		//Colocar o endereçamento do diretorio Completo
		$dirClass = "assets/namespace/class";
		// filename normalmente se refere a todo o nome do arquivo inclusive as suas pastas "file pef"
		$filename = $dirClass . DIRECTORY_SEPARATOR . "$nameClass" . ".php";

		if (file_exists($filename)) {
			require_once($filename);
		}

	}); //End: spl_autoload_register(function($nomeClass){
 ?>