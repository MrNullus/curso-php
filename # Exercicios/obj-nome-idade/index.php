<?php 

require 'Pessoa.class.php';

$algumMardito = new Pessoa('Galatus', '12/02/1000');

echo $algumMardito-getNome() .' tem '. $algumMardito->getIdade() .' anos '.;

?>