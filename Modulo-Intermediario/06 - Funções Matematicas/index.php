<?php
    //*** Funções Matematicas ***
    /* 
        number abs($number) - retorna o valor absoluto de um numero
    */
    echo abs(-12.2);
    echo abs(-2);
    echo abs(5);

    /*  
        number round($number) retorna um numero arredondado
    */
    echo round(12.2);
    echo round(12.3);
    echo round(12.90);
    echo round(12.6);

    /*  
        float ceil($number) vai arredontar para cima
    */
    echo ceil(12.2);
    echo ceil(12.3);
    echo ceil(12.90);

    /*  
        float floor($number) vai arredontar para baixo
    */
    echo floor(12.2);
    echo floor(12.3);
    echo floor(12.90);

    /*  
        int rand($min, $max) vai gerar um numero aleatorio
    */
    echo rand(1, 2);
    echo rand(2, 7);
    echo rand(12, 90);
?>