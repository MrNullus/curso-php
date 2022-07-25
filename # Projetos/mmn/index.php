<style>
	body { background: #fff; font-family: Georgia; letter-spacing: 1pt;}
</style>

<?php  
session_start();
require 'config.php';

if (empty($_SESSION['mmnlogin'])) {
	header("Location: login.php");
	exit;
}

$id = $_SESSION['mmnlogin'];

$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
$sql->bindValue(":id", $id);
$sql->execute();

if ($sql->rowCount() > 0) {
	$sql = $sql->fetch();
	$nome = $sql['nome'];
} else {	
	header("Location: login.php");
	exit;
}

?>

<h1 style="color: #010101; text-align: center;">Market<span style="color:#13E288;">Bay</span>
</h1>
<h2>
	Bem vindo(a), <span style="color:#13E288;"><?php echo $nome;?></span>!
</h2>

[<a href="cadastro.php">Cadastrar Novo Usuário</a>] |

[<a href="sair.php">Sair</a>]