<style>
	body { background: #fff; font-family: Georgia; letter-spacing: 1pt;}
</style>

<?php  
session_start();
require 'config.php';

if (!empty($_POST['nome']) && !empty($_POST['email'])) {

	$id_pai = $_SESSION['mmnlogin'];
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$senha = md5($email);

	$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
	$sql->bindValue(":email", $email);
	$sql->execute();

	if ($sql->rowCount() === 0) {
		$sql = $pdo->prepare("INSERT INTO usuarios (id_pai, email, nome, senha) VALUES (:id_pai, :email, :nome, :senha)");
		
		$sql->bindValue(":id_pai", $id_pai);
		$sql->bindValue(":email", $email);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":senha", $senha);

		$sql->execute();

		header("Location: index.php");
		exit;

	} else { 

		echo "Esse usuário já foi cadastrado!";
		
	}

}
?>

<h1 style="color: #010101; text-align: center;">Market<span style="color:#13E288;">Bay</span>
</h1>
<center>
	<h3>
		Faça mais um entrar para a nação dos verdinhos!
	</h3>
</center>

<br><br>

<center>
<form method="POST">

	<label for="email">Nome:</label><br><br>
	<input type="text" name="nome">
	<br>
	<br>

	<label for="email">Email:</label><br><br>
	<input type="email" name="email">
	<br>
	<br>

	<button type="submit">Cadastrar</button>

</form>

Já possui Cadastro?
<a href="login.php">Entrar</a>

</center>
