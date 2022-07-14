<?php
try {
    $pdo = new PDO("mysql:dbname=projeto_tags;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "Erro: ".$e->getMessage();
    exit;
}

$sql = "SELECT caracteristicas FROM usuarios";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $lista = $sql->fetchAll();

    $carac = array();
        
    foreach ($lista as $usuario) {
        $palavras = explode(",", $usuario['caracteristicas']);

        foreach ($palavras as $palavra) {
            $palavra = trim($palavra);

            if (isset($carac[$palavra])) {
                $carac[$palavra]++;
            } else {
                $carac[$palavra] = 1;
            }
        }
    }

    arsort($carac);
    $palavras = array_keys($carac);
    $contagens = array_values($carac);

    $maior = max($contagens);
    $tamanhos = array(11, 15, 20, 30);
    $cores = array("#235623", "#674523", "#f46523", "#2f0254");

    for ($x = 0; $x < count($palavras); $x++) {
        $n = $contagens[$x] / $maior;
        $h = ceil($n * count($tamanhos));
        $tamanho = $tamanhos[$h - 1];

        if ($tamanho == 11) {
            $cor = $cores[0];
        } elseif ($tamanho == 15) {
            $cor = $cores[1];
        } elseif ($tamanho == 20) {
            $cor = $cores[2];
        } else {
            $cor = $cores[3];
        }

        echo 
        "<p style='font-size:".$tamanho."px;color: ".$cor.";'>"
        .$palavras[$x]." ($contagens[$x])".
        "</p>";
    }
}

?>