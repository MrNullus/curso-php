<?php
    //*** Introdução a Criptografia ***
    $name = "Gustavo";
    //* md5($string) - é um padrão de criptografia irreversivel (em geral, usada nas senha)
    //* base64_encode($string) - é um padrão de criptografia reversivel
    $name2 = md5($nome);
    $codigo = "Qm9uaWVreQ==";

    echo "Não criptografado: ". $name ." | Criptografado: ". $name2;
    //* ira decodificar o padrão base64
    echo "Codigo decodificado: ". base64_decode($codigo);
?>