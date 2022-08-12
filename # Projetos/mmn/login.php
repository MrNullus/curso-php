<style>
	body { background: #fff; font-family: Georgia; letter-spacing: 1pt;}
</style>

<?php  
session_start();
require 'config.php';

if (!empty($_POST['email'])) {

	$email = addslashes($_POST['email']);
	$senha = addslashes(md5($_POST['senha']));

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
	$sql->bindValue(":email", $email);
	$sql->bindValue(":senha", $senha);
	$sql->execute();

	if ($sql->rowCount() > 0) {

		$sql = $sql->fetch();
		$_SESSION['mmnlogin'] = $sql['id'];

		header("Location: index.php");
		exit;

	} else {

		echo "Email e/ou Senha incorretos";

	}
}

?>
<h1 style="color: #010101; text-align: center;">Market<span style="color:#13E288;">Bay</span>
</h1>

<br><br>

<center>
<form method="POST">
	
	<label for="email">Email</label><br><br>
	<input type="email" name="email" id="email" />
	<br><br>

	<label for="senha">Senha</label> <br><br>
	<input type="password" name="senha" id="senha" />
	<br><br>

	<button type="submit">Entrar</button>

</form>

Ou

<a href="cadastro.php">
	Cadastrar
</a>

<center>
