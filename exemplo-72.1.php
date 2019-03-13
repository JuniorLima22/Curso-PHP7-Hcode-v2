<?php
	header("Content-type: image/jpeg");

	$file = "assets/bibliotecaGD/wallpaper.jpg";

	$new_width = 256;
	$new_height = 256;

	//Função que pega o tamanho atual da imagem metodo 2
	list($old_width, $old_height) = getimagesize($file);

	//Carrega a palheta de cores completa
	$new_image = imagecreatetruecolor($new_width, $new_height);

	//Cria uma imagem
	$old_image = imagecreatefromjpeg($file);

	// Função Thumbnail
	imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

	//Gera a imagem JPEG
	imagejpeg($new_image);

	imagedestroy($old_image);
	imagedestroy($new_image);
?>