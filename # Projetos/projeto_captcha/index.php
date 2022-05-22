<?php
session_start();

if (!isset($_SESSION['captcha'])) {
    $n = rand(1000, 9999);
    $_SESSION['captcha'] = $n;
}
?>

<h1>Login</h1>
<form method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" />

    <br>
    <br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha" />

    <br>
    <br>

    <img src="./imagem.php" alt="" width="100" height="50" />
    <br>
    <br>
    <input type="text" name="codigo" id="codigo" />

    <input type="submit" value="Entrar" />
</form>

<?php
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $codigo = $_POST['codigo'];

    if ($codigo == $_SESSION['captcha']) {
        echo 'Logado com sucesso!';
    } else {
        echo 'Digite o codigo novamente';
    }

}
?>