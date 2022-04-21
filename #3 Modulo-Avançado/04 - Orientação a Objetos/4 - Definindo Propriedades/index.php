<?php

    /*  
        * Propriedades - são variaveis (caracteristicas) que a classe possui

        ? Podem ser:
            ! private -> apenas podem ser usadas dentro da classe;
            ! public -> pode ser acessada por todo programa;
          
    */

    class Cachorro {
        public $nome;
        private $idade;
    }

    class Post {
        private titutlo;
        private data;
        private corpo;
        private comentarios;
    }

    $cachorro = new Cachorro();
    $cachorro->nome = "Shuwasneger";

    echo "O nome do meu cachorro eh ". $cachorro->nome;

?>