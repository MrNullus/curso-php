<?php 
session_start(); 
require 'config.php';
$_SESSION['lg'] = '';

if (isset($_POST['email']) && !empty($_POST['email'])) {
	$email = addslashes($_POST['email']);
	$senha = md5(addslashes($_POST['senha']));

	$sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":email", $email);
	$sql->bindValue(":senha", $senha);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$sql = $sql->fetch();
		$id = $sql['id'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$_SESSION['lg'] = $id;

		$sql = "UPDATE usuarios SET ip = :ip WHERE id = :id";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":ip", $ip);
		$sql->bindValue(":id", $id);
		$sql->execute();

		header("Location: index.php");
		exit;
	}
}
?>

<h1>Login</h1>

<form method="POST">
	E-mail: <br>
	<input type="email" name="email" id="email" />
	<br><br>

	Senha <br>
	<input type="password" name="senha" id="senha" />
	<br><br>

	<button type="submit">Entrar</button>
</form>