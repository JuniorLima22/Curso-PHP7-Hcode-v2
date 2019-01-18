<?php 
	//Exibe resultado revisao
	  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	  $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idrevisao DESC LIMIT 1");

	  //Pra executar o comando ao banco de dados
	  $stmt->execute();

	  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	  $resultRevisao = $results[0]["idrevisao"];
	//End: resultado revisao

  //Exibe resultado release
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idrelease DESC LIMIT 1");

  //Pra executar o comando ao banco de dados
  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $resultRelease = $results[0]["idrelease"];
	//End: resultado release

  //Exibe resultado versao
  $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
  $stmt = $conn->prepare("SELECT * FROM versao ORDER BY idversao DESC LIMIT 1");

  //Pra executar o comando ao banco de dados
  $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $resultVersao = $results[0]["idversao"];
//End: resultado versao
?>

<footer class="site-footer push">Curso Udemy PHP 7 - Versão <?php echo $resultVersao. ".". $resultRelease. ".". $resultRevisao; ?></footer>