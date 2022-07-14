<?php
session_start();
require 'config.php';

if (isset($_POST['agencia']) && empty($_POST['agencia']) == false) {
    $agencia = addslashes($_POST['agencia']);
    $conta = addslashes($_POST['conta']);
    $senha = addslashes($_POST['senha']);

    $sql = $pdo->prepare("SELECT * FROM contas WHERE agencia = :agencia AND conta = :conta AND senha = :senha");
    $sql->bindValue(":agencia", $agencia);
    $sql->bindValue(":conta", $conta);
    $sql->bindValue(":senha", md5($senha));
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $sql = $sql->fetch();
        $_SESSION['banco'] = $sql['id'];

        header("Location: index.php");
        exit;
    }
}
?>

<html>
    <head>
        <title>Caixa Eletrônico</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <header>
            <h1 class="logo">Banco Caixa Dois</h1>
            <h3>Sua confiança está em nós!</h3>
        </header>
        
        <main class="container">
            <form method="POST" class="form">
                <div class="title-form">
                    Login
                </div>

                <div class="input-field">
                    <label for="name">Agência</label>
                    <input type="text" name="agencia" />
                </div>

                <div class="input-field">
                    <label for="conta">Conta</label>
                    <input type="text" name="conta" />
                </div>

                <div class="input-field">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" />
                </div>

                <button type="submit" class="btn btn-entry">Entrar</button>
            </form>
        </main>

        <footer>
            <h1 class="logo">Banco Caixa Dois</h1>     

            <h4>&copy; Ms. Heimdall</h4>
        </footer>
    </body>
</html>