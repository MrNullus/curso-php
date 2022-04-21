<?php
    /*  
        * Instanciar uma Classe - nada mais é que pegar essa forma (com todos os metodos e etc) que a class 
        ¬ possui e usar em uma variavel tornando ela um objeto

        ? para isso usa-se:
            [*] Uma variavel (normalmente);
            [*] O operador "new", vai servir para 'chamar' a classe dentro da variavel, 
                ¬ ou seja, usar a forma já existente;
            [*] Caso não for usar uma variavel pode se usar '::' (quatro pontos);
    */
    class Cachorro {

        static function latir() {
            echo "Au auuauauauauau auau au!!!!!!";
        }

    }

    $cachorro = new Cachorro();
    $cachorro->latir();

    $dorat = new Cachorro();
    $dorat->latir();

    /* Não é muito recomendavel e só pode ser usado com o metodo sendo 'static' */
    Cachorro::latir();

?>