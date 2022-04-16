<?php
    $nome = "Gustavo";
    $sobrenome = "Henrique";

    echo "Texto simples";

    // *** Para concatenar no PHP deve se usar o ponto final (.):
    echo "Meu nome é " . $nome . $sobrenome . " Hello World!!!!!!!";

    // *** No PHP  pode se usar as variaveis com o 'echo' sem concatenar por exemplo:
    // - exibindo direto o valor da variavel:
    echo $nome;

    // - exibindo a variavel dentro de uma string sem concatenar:
    echo "Hello Browter, it is my name $nome!!!";

    // *** Não há quebra de linha com o echo e pode se quebrar em varias linhas a 
    // ¬ mensagem do "echo" basta estar concatenada direito e com ponto e virgula (;):
    echo "Hello Browter, " .
    "it is my name " . 
    "$nome!!!";

?>