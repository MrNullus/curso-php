<?php
    //*** Sessão - Cookies ***
    /*  
        + session_start() - para iniciar uma sessão 
    */
    session_start();

    // ** armazena um valor a sessão teste
    // ? pode se armazenar arrays, numeros e etc...
    $_SESSION["teste"] = "Lavoisier Sartre";

    // ** acessa a sessão 'teste'
    echo "Sessão foi feita...". $_SESSION["teste"];

    /*  
        + setcookie() - para criar cookies
    */
    setcookie("meuteste", "meu cookie porra", time() + 3600);

    /*  
        + $_COOKIE["nameCookie"] - para acessar os cookies
    */
    echo "Meu cookie eh de: ". $_COOKIE["meuteste"];

?>