<?php
    /*  
        * Polimorfismo - é quando extende a classe e acaba recriando ou substituindo 
        ¬ um metodo e ou propriedade por outra
       
    */

    class Bicho {

        public function getNome() {
            echo "getNome da classe Animal";
        }

    }

    class Cachorro extends Bicho {
        
        public function getNome() {
            echo "getNome da classe Cachorro";
        }

    }

    $cachorro = new Cachorro();
    $cachorro->getNome();
    
?>