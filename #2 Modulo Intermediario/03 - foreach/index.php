<?php
    //* foreach vai servir para percorrer arrays e fazer alguma coisa em relação a seus itens

    $nomes = array("Luska Play", "Caluka", "Sonic", "Dimitrovik");

    foreach($nomes as $nome) { 
        echo "Aluno: ". $nome ."<br />";
    } 

    $aluno = array(
        "nome" => "Bilau",
        "idade" => 1900,
        "estado" => "Bilaue",
        "pais" => "Salmonela do Sul"
    );
    foreach($aluno as $chave => $dado) {
        echo $chave ." => ".$dado. "<br />";
    }
?> 