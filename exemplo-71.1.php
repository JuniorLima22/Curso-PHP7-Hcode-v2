<?php 
  $image = imagecreatefromjpeg("assets/bibliotecaGD/certificado.jpg");

  //Paleta de cores no formato RGB
  $titleColor = imagecolorallocate($image, 0, 0, 0);
  $gray = imagecolorallocate($image, 100, 100, 100);

  //Escrever na imagem
  imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
 
  imagettftext($image, 32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Júnior Lima");
  
  imagestring($image, 3, 350, 370, utf8_decode("Concluído em: ").date("d/m/Y - H:i:s"), $titleColor);

  //Executar
  header("Content-type: image/jpeg");

  //Função exibe a imagem na tela
  imagejpeg($image);

  //Destroy
  imagedestroy($image);
?>