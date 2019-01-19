<?php 

header("Content-Type: image/png");

//Cria uma imagem e tela
$image = imagecreate(256, 256);

//Paleta de cores
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//Escrever na tela
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

//Informar o Formato que deve gerar
imagepng($image);

//Destruir a variavel
imagedestroy($image);

 ?>