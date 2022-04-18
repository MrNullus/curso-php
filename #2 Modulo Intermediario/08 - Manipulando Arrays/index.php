<?php
    //*** Manipulação de Arrays ***
    /*  
        + array array_keys($array) - vai retornar um array com as chaves do array passado
        + array array_values($array) - vai retornar um array com os values do array passado
    */
    $array = array(
        "nome" => "Bonieky",
        "idade" => 1298,
        "cidade" => "Francisco Faradarth",
        "pais" => "Satur"
    );

    $keysOfArray = array_keys($array);
    $valuesOfArray = array_values($array);

    print_r($keysOfArray);  
    print_r($valuesOfArray);

    /*  
        + array_pop($array) - retira um elemento do final de um array
        + array_shift($array) - retira um elemento do começo de um array
    */
    array_pop($array);
    array_shift($array);

    print_r($array);

    /*  
        + asort($array) - ordena um array mantendo a associação entre indices e valores
        ! ou seja, ordena ou inverte os valores do array passado !
        + arsort($array) - inverte um array mantendo a associação entre indices e valores
    */
    print_r(asort($array));
    print_r(arsort($array));

    /*  
        + int count($array) - retorna quantos elementos esse array possui é como o '.length'
    */
    print_r(count($array));

    /*  
        + bool in_array($search, $array) - proucura em um array o valor passado como $search e retorna true ou false
    */
    if (in_array("Lavoisier", $array)) {
        echo "Saporra existe!!!!!!";
    }
?>