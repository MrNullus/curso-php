<?php
session_start();

require './config.php';

require './class/users.class.php';
require './class/documents.class.php';

if (!isset($_SESSION['logado'])) {  
    header('Location: login.php');
    exit;
}

$users = new Users($pdo);
$users->setUser($_SESSION['logado']);

// se não possuir a permissão 'SECRET' será redirecionado para 'index.php'
if (!$users->isAllowed("SECRET")) {
    header("Location: index.php");
    exit;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>

<h1>Página Secreta</h1>