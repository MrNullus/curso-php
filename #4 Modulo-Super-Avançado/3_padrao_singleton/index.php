<?php
/*  
    *** Padrão Singleton  ***
    -> É para quando não se quer instanciar varias vezes objeto 
    ¬ mas usa-se um metodo para instanciar objeto dentro do objeto
    -> ou seja, é para quando precisa de uma class que não se replica mais de uma vez
    -> um objeto unico a ser usado
*/
// Padrão Singleton
class Pessoa {

    private $nome;
    private $idade;
    
    public static function getInstance() {
        static $instance = null;

        if ($instance === null) {
            $instance = new Pessoa();
        }
        
        return $instance;
    }

    private function __construct() {

    }

    public function setNome($n) {
        $this->nome = $n;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setIdade($i) {
        $this->idade = $i;
    }
    public function getIdade() {
        return $this->idade;
    }

}
//? assim eu instancio o objeto dentro do objeto
$cara = Pessoa::getInstance();
$cara->setNome("Shuwasneger Tunado");

echo "Pessoa 1 - Nome: ".$cara->getNome();

$cara2 = Pessoa::getInstance();
$cara2->setIdade(12);
echo "Pessoa 2 - Nome: ".$cara2->getNome() ." | Idade: ". $cara2->getIdade();


?>