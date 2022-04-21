<?php
    define("URL_BASE", "./img/");
    $arquivo = "rorschach.jpg";

    $largura = 200;
    $altura = 200;

    //* Vai desestruturar o array do getimagesize e colcocar nas respectivas variaveis
    // ? getimagesize($image) |> retorna o tamanho da imagem
    list($largura_original, $altura_original) = getimagesize(URL_BASE.$arquivo);

    // ? ratio é a proporção de largura X altura d imagem
    $ratio = $largura_original / $altura_original;
    // echo $ratio;

    if ($largura/$altura > $ratio) {
        $largura = $altura * $ratio;
    } else  {
        $altura = $largura / $ratio;
    }

    // ? imagecreatetruecolor($width, $height) |> essa função cria uma imagem padrão
    // ? ¬ como no Photoshop, deve se passar a largura  altura dela
    $imagem_final = imagecreatetruecolor($largura, $altura);

    // ? imagecreatefrompng($image) |> ira criar uma imagem PNG apartir da imagem passada
    $imagem_original = imagecreatefromjpeg(URL_BASE.$arquivo);

    // ? imagecopyresampled() |> vai copiar a imagem, redimensiona-la na proporção
        // ? imagecopyresized() |> vai copiar a imagem, redimensiona-la
    imagecopyresampled(
        $imagem_final, 
        $imagem_original, 
        0, 0, 0, 0, 
        $largura, $altura,
        $largura_original,
        $altura_original
    );

    // ? exibir a imagem
    // ! a diferentes funções para cada tipo de imagem
    // ? imagejpeg($imagem, $filename, $quality) |> vai funcionar para imagens jpg ou jpeg

    // header("Content-Type: image/png");
    imagejpeg($imagem_final, URL_BASE."mini_imagem.jpg", 100);

    echo "Imagem Redimencionada e Salva!!!";


?>