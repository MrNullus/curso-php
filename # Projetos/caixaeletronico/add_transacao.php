<?php
session_start();
require 'config.php';

if (isset($_POST['tipo']) && empty($_POST['tipo']) == false) {
    $tipo = $_POST['tipo'];
    $valor = str_replace(",", ".", $_POST['valor']);
    $valor = floatval($valor);

    $sql = $pdo->prepare("INSERT INTO historico (id_conta, tipo, valor, data_operacao) VALUES (:id_conta, :tipo, :valor, NOW())");
    $sql->bindValue(":id_conta", $_SESSION['banco']);
    $sql->bindValue(":tipo", $tipo);
    $sql->bindValue(":valor", $valor);
    $sql->execute();

    if ($tipo == '1') {
        // Depósito
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo + :valor WHERE id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSION['banco']);
        $sql->execute();
    } else {
        // Saque/Retirada
        $sql = $pdo->prepare("UPDATE contas SET saldo = saldo - :valor WHERE id = :id");
        $sql->bindValue(":valor", $valor);
        $sql->bindValue(":id", $_SESSON['banco']);
        $sql->execute();
    }

    header("Location: index.php#table-extract");
    exit;
}
?>

<!DOCTYPE html>
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
                    Adicionar nova Transação
                </div>

                <div class="input-field">
                    <label for="tipo">Tipo  de Transação:</label>
                    <select name="tipo" id="tipo">
                        <option value="1" selected>Depósito</option>
                        <option value="2">Retirada</option>
                    </select>
                </div>

                <div class="input-field">
                    <label for="valor">Valor: </label>
                    <input type="text" name="valor" pattern="[0-9.,]{1,}"/>
                </div>

                <button type="submit" class="btn">Adicionar</button>
            </form>
        </main>

        <footer>
            <h1 class="logo">Banco Caixa Dois</h1>     

            <h4>&copy; Ms. Heimdall</h4>
        </footer>
    </body>
</html>