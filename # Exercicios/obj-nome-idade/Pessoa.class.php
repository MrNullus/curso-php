<?php

class Pessoa {

    private nome;
    private idade;


    private function calcularIdade($data_nascimento) {
        $anoAtual = intval(date("Y"));
        $arr_data = explode("/", $data_nascimento);
        $anoNascimento = array_pop($arr);

        return ( $anoAtual - $anoNascimento );
    }


    public function __construct($nome, $anoNascimento) {
        $this->nome  = $nome;
        $this->idade = $this->calcularIdade($anoNascimento);
    }


    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

}

?>

