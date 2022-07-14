<?php
session_start();
require 'config.php';

if (empty($_SESSION['logado'])) {
    header("Location: login.php");
    exit;
}

$email = '';
$codigo = '';

$sql = "SELECT email, codigo FROM usuarios WHERE id = '".addslashes($_SESSION['logado'])."'";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $info = $sql->fetch();
    $email = $info['email'];
    $codigo = $info['codigo'];
}
?>
<h1>Área Interna do Sistema</h1>
<p>Usuário: <?php echo $email; ?>  - <a href="sair.php">Sair</a></p>
<p>
    Link de convite: 
    http://localhost/curso-php/%23%20Projetos/projeto_registro_por_convite/cadastrar.php?codigo=<?php echo $codigo; ?>
</p>