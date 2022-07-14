<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=projeto_comentarios', 
        'root', 
        ''
    );
    
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    exit();
}
?>