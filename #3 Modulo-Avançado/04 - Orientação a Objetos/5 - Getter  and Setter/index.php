<?php

    /*  
        * Getter & Setter - são metodos que a classe normalmente possuem, 
        ¬ para pegar algun valor (Getter) e setar ou seja mudar  esse valor (Setter)

        ? Getter -> possui a função de pegar o valor de alguma propriedade e ou retornalo;
            - deve se usar o prefixo: get para quanto for metodos Getters
        ? Setter -> possui funcção de setar o valor, isto é mudar ele;
            - deve se usar o prefixo: set para quanto for metodos Setters
       
        ? $this -> é a 'variavel' especial que possui o objetivo de referenciar ao contexto, ou seja,
        ¬ dentro do contexto da linha 21 e 25 por exemplo, o this representa a class Post sendo assim, 
        ¬ this dentro de uma classe serve para refenciar a class seria o mesmo que usar 'Post->titulo';

    */

    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;

        public function getTitulo() {
            return $this->titulo;
        }

        public function setTitulo($t) {
            $this->titulo = $t;
        }

    }

    $post = new Post();
    $post->setTitulo("Titulo de uma Postagem");

    echo "<h3>".$post->getTitulo()."</h3>";

?>