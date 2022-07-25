<?php 
// configs iniciais
session_start();
require 'config.php';

// verificar os dados enviados
if (isset($_POST['nickname']) && !empty($_POST['nickname'])) {

	// setar valores vindos do form
	$nickname = addslashes($_POST['nickname']);
	$email = addslashes($_POST['email']);
	$password = addslashes(md5($_POST['password']));

	// fazer inserção no bd
	$sql = "INSERT INTO usuarios SET nickname = :nickname, email = :email, password = :password";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":nickname", $nickname);
	$sql->bindValue(":email", $email);
	$sql->bindValue(":password", $password);
	$sql->execute();

	// verificar cadastro e enviar o user para o index
	if ($sql->rowCount() > 0) {
		// fazer consulta no bd
		$sql = "SELECT id, nickname FROM usuarios WHERE nickname = :nickname AND password = :password";
		$sql = $pdo->prepare($sql);
		$sql->bindValue(":nickname", $nickname);
		$sql->bindValue(":password", $password);
		$sql->execute();
		$data = $sql->fetchAll();
		$data = array_unique($data[0]);

		// setar SESSION e madar para o index
		$_SESSION['logged'] = $data;
		header("Location: index.php");
		exit;
	}
}

?>