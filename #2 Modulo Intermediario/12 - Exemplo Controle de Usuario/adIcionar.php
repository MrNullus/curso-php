<?php
    require "config.php";

    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $pdo->query($sql);

        header("Location: index.php");
    }
?>

<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" />
    <br />

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" />
    <br />

    <label for="senha">Senha:</label>
    <input type="password" id="passsword" name="senha" />
    <br />

    <input type="submit" value="Cadastrar!"/>
</form>
