<style>
	body { background: #fff; font-family: Georgia; letter-spacing: 1pt;}
</style>

<?php  
#=* Data Initials *=#
session_start();

require 'config.php';
require 'utils.php';
	
$id = $_SESSION['mmnlogin'];
$lista = array();

#= Authentication Login =#
if (empty($_SESSION['mmnlogin'])) {
	header("Location: login.php");
	exit;
}

#= Get and verify name from id from user logged =#
$sql = $pdo->prepare(
	"SELECT nome FROM usuarios WHERE id = :id"
);
$sql->bindValue(":id", $id);
$sql->execute();

if ($sql->rowCount() > 0) {
	$sql = $sql->fetch();
	$nome = $sql['nome'];
} else {	
	header("Location: login.php");
	exit;
}

$lista = listar($id, $limite);
?>

<h1 style="color: #010101; text-align: center;">Market<span style="color:#13E288;">Bay</span>
</h1>
<center>
<h2>
	Bem vindo(a), <span style="color:#13E288;"><?php echo $nome;?></span>!
</h2>
</center>

[<a href="cadastro.php">Cadastrar Novo Usuário</a>] |

[<a href="sair.php">Sair</a>]
<hr />

<h4>Lista de Cadastro</h4>
<?php exibir($lista); ?>
