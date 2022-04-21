<?php
    /*  
        * A abstração vai servir para aumentar os niveis de classes e tornalas mais concistentes
        ¬ quando se abstrai um metodo de uma classe é obrigadorio usar 'abstract' na frente da 
        ¬ class, isso significa que a class que herda essa classe abstrata exige pré-requisitos
    */

    abstract class Animal {
        private $nome;
        private $idade;

        abstract protected function andar();

        public function setNome($n) {
            $this->nome = $n;
        }
        public function getNome() {
            return $this->nome;
        }

    }

    //*** Cavalo extente Animal
    class Cavalo extends Animal {
        private $quantidade_de_patas;
        private $tipo_de_pelo;

        public function andar() {

        }

    }

    class Gato extends Animal {
        private $quantidade_de_patas;
        private $miado;

        public function andar() {
            
        }

    }

    $cavalo = new Cavalo();
    $cavalo->setNome("Shuwasneger");

    echo "O nome do cavalo ai eh ". $cavalo->getNome();

?>