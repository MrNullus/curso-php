<?php
// configs iniciais
session_start();
require 'config.php';
$data = $_SESSION['logged'];

// verificar se SESSION existe
if (!isset($_SESSION['logged'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['shit']) && empty($_POST['shit']) == false) {
    // receber mensagem do form
    $shitInput = $_POST['shit'];
    $nickname = $data["nickname"];
    $sql = $pdo->prepare("INSERT INTO mensagens (nickname, msg, data_msg) VALUES (:nickname, :shit, NOW())");
    $sql->bindValue(":nickname", $nickname);
    $sql->bindValue(":shit", $shitInput);
    $sql->execute();

    header("Location: index.php");
    exit;
}
?>