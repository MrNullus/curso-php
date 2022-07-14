<?php
session_start();
require 'config.php';

# validar codigo passado
if (!empty($_GET['codigo'])) {
    $codigo_cvt = addslashes($_GET['codigo']);

    $sql = "SELECT qtd_use FROM usuarios WHERE codigo = '$codigo_cvt'";
    $sql = $pdo->query($sql);
    $data = $sql->fetch();

    if ($sql->rowCount() == 0) {
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}

# validar campo para envio das informações
if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() == 0) {
        $codigo = md5("{rand(0, 9999)}{rand(0, 9999)}");
        $sql = "INSERT INTO usuarios (email, senha, codigo) VALUES ('$email', '$senha', '$codigo')";
        $sql = $pdo->query($sql);

        unset($_SESSION['logado']);
        header("Location: index.php");
        exit;
    }
}
?>

<h3>Cadastrar</h3>
<form method="POST">
    Email: <br />
    <input type="email" name="email" id="email" />
    <br><br>

    Senha: <br />
    <input type="password" name="senha" id="senha" />
    <br><br>

    <button type="submit">Cadastrar</button>
</form>