<?php
    //* functions - vai servir para criar blocos de codigos com um objetivo especifico;
    /* 
        + Sintaxe:
            function nameFunction($args) {
                # code...
            }

    */
    function somarNumero($x, $y) {
        return $x + $y;
    }
    function mostrarNome() {
        return "Heimdall";
    }

    $resultado = somarNumero(12, 23);
    echo "O resultado eh ". $resultado;
    echo "O nome eh esse ". mostrarNome();
?>