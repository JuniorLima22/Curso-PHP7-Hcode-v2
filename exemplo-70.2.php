<?php 
  $image = imagecreatefromjpeg("assets/bibliotecaGD/certificado.jpg");

  //Paleta de cores no formato RGB
  $titleColor = imagecolorallocate($image, 0, 0, 0);
  $gray = imagecolorallocate($image, 100, 100, 100);

  //Escrever na imagem
  imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
  imagestring($image, 5, 440, 350, utf8_decode("Júnior Lima"), $titleColor);
  imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

  //Executar
  header("Content-type: image/jpeg");

  //Função gerar arquivo de imagem
  //Local onde salvar
  $imageSalvar = "assets/bibliotecaGD/";
  imagejpeg($image, "$imageSalvar"."certificado-". date("Y-m-d"). ".jpg");

  //Destroy
  imagedestroy($image);

  header("Location: index.php?pg=exemplo-70&m=download&#download");
?>