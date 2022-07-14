<?php
// configs iniciais
session_start();
require 'config.php';

// verificar se SESSION existe
if (!isset($_SESSION['logged'])) {
    header("Location: index.php");
    exit;
}

// verificar se param id existe
if (isset($_GET['idShit']) && !empty($_GET['idShit'])) {
    // deletar mensagem
    $id_message = addslashes($_GET['idShit']);
    $sql = 'DELETE FROM mensagens WHERE id = :id_message';
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id_message", $id_message);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        header("Location: index.php");
        exit;
    }
}

?>