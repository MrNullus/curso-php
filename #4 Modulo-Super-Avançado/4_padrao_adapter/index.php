<?php
/*  
    *** Padrão Adapter ***
    #> Diferente do Singleton ele é extensivel
*/

class Pessoa {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getIdade() {
        return $this->idade;
    }
}

class PessoaAdapter {
    private $sexo;
    private $pessoa;
    
    public function __construct(Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }

    public function setSexo($s) {
        $this->sexo = $s;
    }
    public function getSexo() {
        return $this->sexo;
    }

    public function getNome() {
        return $this->pessoa->getNome();
    }
    public function getIdade() {
        return $this->getIdade();
    }
}

$pessa = new Pessoa("Alarick", 9000);

$pa = new PessoaAdapter($pessoa);
$pa->setSexo("masculino");

echo "Nome: ". $pa->getNome();
echo "<br />";
echo "Idade: ". $pa->getIdade();
echo "<br />";
echo "Sexo: ". $pa->getSexo();

?>
