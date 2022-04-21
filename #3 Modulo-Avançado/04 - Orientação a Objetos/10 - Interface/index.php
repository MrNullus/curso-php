<?php
    /*  
        * Interface - serve como um template para implementar em uma class 
        ¬ sendo que não se coloca conteudo dentro dela
        ¬ metodos e propriedades só podem 'public' e todo sendo que eles devem 
        ¬ ser declarados nas classes a qual foi implementada
    */

    interface Animal {

        public function andar();

    }

//* classe Cachorro implementa (interface) Animal
    class Cachorro implements Animal {
        public function andar() {
            echo "Andando.......Andando......Andando...";
        }
    }

    $cachorro = new Cachorro();
    $cachorro->andar();

?>