<?php
try{
    $pdo = new PDO("mysql:dbname=projeto_lixeiradeitens;host=localhost", "root", "");
} catch (PDOException $e) {
    echo "ERROR: ". $e->getMessage();
    exit;
}
?>