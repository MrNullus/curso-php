<?php
    $x = 0;

    while ($x <= 10) {
        /* 
            + pós incremento
                - vai retornar primeiro o valor depois incrementa

            + pre incremento
                - vai incrementar primeiro depois retornar o valor                

            ++$x != $x++
         */
        ++$x;

        echo "O valor de x eh igual ". $x ."<br />";
    }
?> 