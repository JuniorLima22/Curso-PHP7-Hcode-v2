<?php 
  $image = imagecreatefromjpeg("assets/bibliotecaGD/certificado.jpg");

  //Paleta de cores no formato RGB
  $titleColor = imagecolorallocate($image, 0, 0, 0);
  $gray = imagecolorallocate($image, 100, 100, 100);

  //Escrever na imagem
  imagettftext($image, 32, 0, 450, 150, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
 
  imagettftext($image, 32, 0, 440, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."bibliotecaGD".DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Júnior Lima");
  
  imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y - H:i:s"), $titleColor);

  //Executar
  header("Content-type: image/jpeg");
   
  //Local onde salvar
  $imageSalvar = "assets/bibliotecaGD/";

  //Função gerar arquivo de imagem
  imagejpeg($image, "$imageSalvar"."certificado-". date("Y-m-d__H.i.s"). ".jpg");

  //Destroy
  imagedestroy($image);

  header("Location: index.php?pg=exemplo-71&m=download&#download");
?>