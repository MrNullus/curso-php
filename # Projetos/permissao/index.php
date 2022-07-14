<?php
session_start();

require './config.php';

require './class/users.class.php';
require './class/documents.class.php';

// verifica se está logado
if (!isset($_SESSION['logado'])) {  
    header('Location: login.php');
    exit;
}

$users = new Users($pdo);
$users->setUser($_SESSION['logado']);

$documents = new Documents($pdo);
$lista = $documents->getDocuments();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<h1>Sistema</h1>

<?php if($users->isAllowed('ADD')): ?>
<a href="#">
    Adicionar Documento
</a>
<?php endif; ?>
<br><br>

<?php if($users->isAllowed('SECRET')): ?>
<a href="./secreto.php">Página Secreta</a>
<?php endif; ?>

<br><br>

<table border="2" width="90%" align="center">
    <tr>
        <th>Nome do Arquivo</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($lista as $item): ?>
    <tr>
        <td>
            <?php echo $item['titulo']; ?>
        </td>
        <th>
            <?php if ($users->isAllowed('EDIT')):  ?>
            [<a href="#">Editar</a>]
            <?php endif; ?>

            <?php if ($users->isAllowed('DEL')):  ?>
            [<a href="#">Excluir</a>]
            <?php endif; ?>
        </th>
    </tr>
    <?php endforeach; ?>
</table>

