<?php

    /*  
        * Construtor ou Construct - vai ser o primeiro metodo a ser executado quando a classe for instanciada

    */

    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;

        public function __construcct($t, $c) {
            $this->setTitulo($t); 
            $this->setCorpo($c);
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            if (is_string($t)) {    
                $this->titulo = $t;
            }
        }

        public function setCorpo($c) {
            $this->corpo = $c;
        }
        public function getCorpo() {
            return $this->corpo;
        }

    }

    $post = new Post("Titulo de uma Postagem");

    echo "<h3>".$post->getTitulo()."</h3>";
    echo "<p>".$post->getCorpo()."</p>";

?>