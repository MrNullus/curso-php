<?php
    $imagem = "rorschach.jpg";

    list($largura_original, $altura_original) = getimagesize($imagem);
    list($largura_mini, $altura_mini) = getimagesize("mini_imagem.jpg");

    $imagem_final = imagecreatetruecolor($largura_original, $altura_original);

    $imagem_original = imagecreatefromjpeg("rorschach.jpg");
    $image_mini = imagecreatefromjpeg("mini_imagem.jpg");

    imagecopy(
        $imagem_final, $imagem_original,
        0, 0, 0, 0,
        $largura_original, $altura_original
    );

    imagecopy(
        $imagem_final, $image_mini,
        0, 0, 0, 0,
        $largura_mini, $altura_mini
    );

    // header("Content-Type: image/jpg");
    imagejpeg($imagem_final, "imagem_marca_dagua.jpg", 100);

    echo "Imagem criada com sucesso!!!!";

?>