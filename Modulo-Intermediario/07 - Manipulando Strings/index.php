<?php
    //*** Manipulação de Strings ***
    
    /*  
        + string explode($separator, $string) - divide uma string em uma string (ou seja, no caso um array)
    */
    $nome = "Gustavo Henrique";

    $novoNome = explode(" ", $nome);
    print_r($novoNome);

    /*  
        + string implode($separator, $array) - vai unir os valores de um array 
        ¬ usando o separador informado retornando uma string
    */
    $array = ["Gustavo", "Henrique"];
    $nomeCompleto = implode(" ", $array);

    echo $nomeCompleto;

    /*  
        + number_format($number, $decimals) - vai formatar numeros, 
        ¬ normalmente usado em floats para definir quantas casas decimais vão aparecer
    */
    $number = 1212.1212;
    $formatedNumber = number_format($number, 3);

    /*  
        + str_replace($pesquisa, $troca, $string) - troca determinado valor em uma string
    */
    $text = "O rato roeu a roupa do rei de roma";
    $newText = str_replace("roeu", "fudeu", $text);

    echo $newText;

    /*  
        + string strtolower($string) passa uma string para minusculas
    */
    $hi = "OLAAAAAAAAAAAAAAAAA!!!!!!!!!!!";
    echo strtolower($hi);

    /*  
        + string strtoupper($string) passa uma string para maiusculas
    */
    echo strtoupper($hi);


    /*  
        + string substr($string, $start, $length) - vai servir para copiar partes ou toda uma string
    */
    $texto = "Devero";
    $substring = substr($texto, 0, 3);

    echo $substring;

    /*  
        + string ucfirst($string) - vai retornar uma string com só o primeiro caractere maiusculo;
    */
    $texto = "lucius";
    echo ucfirst($texto);

    /*  
        + string ucwords($string) - vai retornar uma string com todos os primeiros caracteres maiusculos;
    */
    $texto = "lucius severo";
    echo ucwords($texto);
?>