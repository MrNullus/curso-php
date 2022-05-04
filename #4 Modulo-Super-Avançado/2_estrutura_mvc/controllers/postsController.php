<?php 
class postsController {

    public function index() {
        echo "Lista das postagens....";
    }

    public function ver($nome, $sobrenome) {
        echo "Meu nome: ".$nome." ".$sobrenome;
    }

}

?>