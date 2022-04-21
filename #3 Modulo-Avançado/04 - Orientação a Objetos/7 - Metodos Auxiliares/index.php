<?php

    /*  
        * Construtor ou Construct - vai ser o primeiro metodo a ser executado quando a classe for instanciada

    */

    class Post {
        private $titulo;
        private $data;
        private $corpo;
        private $comentarios;
        private $qtComentarios;

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($t) {
            if (is_string($t)) {    
                $this->titulo = $t;
            }
        }
        
        public function addComentario($msg) {
            $this->comentarios[] = $msg;
            $this->contarComentarios();
        }

        public function getQuantosComentarios() {
            return $this->qtComentarios;
        }

        private function contarComentarios() {
            $this->qtComentarios = count($this->comentarios);
        }

    }

    $post = new Post();
    $post->setTitulo("Titulo de uma Postagem");

    echo "<h3>".$post->getTitulo()."</h3>";

    $post->addComentario("Teste 1");
    $post->addComentario("Teste 2");
    $post->addComentario("Teste 3");
    $post->addComentario("Teste 4");
    $post->addComentario("Teste 5");
    $post->addComentario("Teste 6");
    $post->addComentario("Teste 7");

    echo "Comentarios ". $post->getQuantosComentarios();
?>