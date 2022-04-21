<?php

    class Usuario {
        /* 
            * Metodos dentro do php podem ser criadps do mesmo jeito que se cria uma função:

                <type_permission> function methodName(<args>) {
                    # code for method...
                }

            ? <type_permission> é o tipo de permissão que o metodo devera ter, ou seja,
             ¬ define como será visto o metodo, trocando para miudos, isso define o escopo do metodo

            ? Existe alguns tipos de permissions:
                *- public => torna o metodo publico a todo programa, ou seja, podem ser usado dentro e fora da classe;
                *- private => torna o metodo visivel apenas a classe, ou seja, só pode ser usado dentro da classe;
                *- protected => pode-se usar o metodo apenas, dentro da classe e em suas classes agregadas;

        */
        public function trocarSenha() {
            
        }

        private function conectarAoBanco() {
            
        }

        protected function algumaCoisa() {

        }
    }

?>