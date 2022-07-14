<?php
$dsn = "mysql:host=localhost;dbname=projeto_permissao";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
    echo "ERROR: ". $e->getMessage();
    exit;
}
?>