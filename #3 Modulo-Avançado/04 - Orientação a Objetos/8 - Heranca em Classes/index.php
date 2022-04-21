<?php

    class Animal {
        public $nome;
        private $idade;
    }

    //*** Cavalo extente Animal
    class Cavalo extends Animal {
        private $quantidade_de_patas;
        private $tipo_de_pelo;
    }

    class Gato extends Animal {
        private $quantidade_de_patas;
        private $miado;
    }

    $cavalo = new Cavalo();
    $cavalo->nome = "Shuwasneger";

    echo "O nome do cavalo ai eh ". $cavalo->nome;

?>