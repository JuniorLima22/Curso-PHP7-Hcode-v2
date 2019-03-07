<?php 
  $image = imagecreatefromjpeg("certificado.jpg");

  //Paleta de cores no formato RGB
  $titleColor = imagecolorallocate($image, 0, 0, 0);
  $gray = imagecolorallocate($image, 100, 100, 100);

  imagettftext($image, 32, 0, 450, 150, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
 
imagettftext($image, 32, 0, 440, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Júnior Lima");
  
  imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

  //Executar
  header("Content-type: image/jpeg");

   //Função gerar arquivo de imagem
  //Local onde salvar
  // $imageSalvar = "assets/bibliotecaGD/";
  // imagejpeg($image, "$imageSalvar"."certificado-". date("Y-m-d__H.i.s"). ".jpg");

  imagejpeg($image,"certificado-". date("Y-m-d__H.i.s"). ".jpg");

  //Função image
  // imagejpeg($image);

  //Destroy
  imagedestroy($image);
?>