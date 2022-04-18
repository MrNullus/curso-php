<?php
    //*** Funções de Tempo e Data ***
    /* 
        + date() - função de data
    */
    $dataatual = date("d/m/Y H:i:s");
    echo $dataatual;

    // usando \(barra invertida) o PHP entende que é texto simples
    $dataatual = date("d/m/Y \á\sH:i:s");
    echo $dataatual;

    /* 
        + time() - retorna os segundos que se passaram desde a Era Unix
    */
    echo time();

    /* 
        + mktime() - obtem um timestamp Unix de uma data
            - passa uma data especifica e ele retorna quantos segundos se passarão
    */
    // echo mktime();

?>
