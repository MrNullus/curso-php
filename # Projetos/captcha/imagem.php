<?php
session_start();

//* Define o tipo de conteudo como imagem
header("Content-Type: image/jpeg");

$n = $_SESSION['captcha'];
$image = imagecreate(100, 50);

//* Define a cor de fundo da imagem
//? imagecolorallocate($image, red, green, blue)
imagecolorallocate($image, 200, 200, 200);

$fontcolor = imagecolorallocate($image, 20, 20, 20);

//* Insere um texto para imagem, 
imagettftext($image, 44, 0, 20, 34, $fontcolor, './font/Ginga.otf', $n);

imagejpeg($image, null, 100);
?>