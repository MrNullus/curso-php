<?php 
// configs iniciais
session_start();
require 'config.php';

// verificar os campos enviados
if (isset($_POST['nickname']) && !empty($_POST['nickname'])) {
	$nickname = addslashes($_POST['nickname']);
	$password = addslashes(md5($_POST['password']));

	// consultar se existe o pass e nick no bd
	$sql = "SELECT * FROM usuarios WHERE nickname = :nickname AND password = :password";
	$sql = $pdo->prepare($sql);
	$sql->bindValue(":nickname", $nickname);
	$sql->bindValue(":password", $password);
	$sql->execute();
	
	// verificar se houve resultado e enviar para o index
	if ($sql->rowCount() > 0) {
		$aux = $sql->fetchAll();
		$data = $aux[0];
		print_r($data);

		// setar SESSION e mandar para o index
		$_SESSION['logged'] = $data;
		header("Location: index.php");
		exit;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ζ Holly Shit ζ</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>	
	<header>
       <h1>ζ Holly Shit ζ</h1> 
    </header>

	<main class="login-main">	
		<div class="app-form login">
			<form method="post">
				<div class="title-form">
					Login
				</div>

				<div class="input-field">
					<label for="nickname">Nickname</label>
					<input type="text" name="nickname" id="nickname" />
				</div>

				<div class="input-field">
					<label for="senha">Senha</label>
					<input type="password" name="password" id="password" />
				</div>

				<button type="submit" class="btn btn-login">Log in</button>
				<a href="cadastrar.php" class="btn btn-our-login">Our Sig Up</a>
			</form>	
		</div>
		
	</main>

	<footer>
        <h4>ζ Holly Shit ζ</h4>
        <h5>&copy; Ms. Heimdall</h5>
    </footer>
</body>
</html>