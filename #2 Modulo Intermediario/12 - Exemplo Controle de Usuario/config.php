<?php
    // *** acess database
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser ="root";
    $dbpass = "";

    // *** connect database
    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass);

    } catch (PDOException $e) {
        echo "Falhou a conexão: ". $e->getMessage();
    }
?>