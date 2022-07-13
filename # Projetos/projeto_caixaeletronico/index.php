<?php
session_start();
require 'config.php';

if (isset($_SESSION['banco']) && !empty($_SESSION['banco'])) {
    $id = $_SESSION['banco'];

    $sql = $pdo->prepare("SELECT * FROM contas WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch();
    } else {
        header("Location: login.php");
        exit;
    }

} else {
    header('Location: login.php');
    exit;
}
?>

<html>
    <head>
        <title>Caixa Eletrônico</title>
    </head>
    <body>
        <h1>Banco Caixa Dois</h1>
        <p>
            <strong>Titular:</strong> <?php echo $info['titular']; ?> | [<a href="sair.php">Sair</a>]
        </p>
        <p>
            <strong>Agência:</strong> <?php echo $info['agencia']; ?>
        </p>
        <p>
            <strong>Conta:</strong> <?php echo $info['conta']; ?>
        </p>
        <p>
            <strong>Saldo:</strong> $<?php echo $info['saldo']; ?>
        </p>

        <br>
        <hr />
        <br>

        <h3>Movimentação/Extrato</h3>
        <a href="add_transacao.php">Adicionar Transação</a>
        <br/>
        
        <table border="1" width="56%">
            <tr>
                <th>Data</th>
                <th>Valor</th>
            </tr>

            <?php
            $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
            $sql->bindValue(":id_conta", $id);
            $sql->execute();

            if ($sql->rowCount() > 0) {
                foreach ($sql->fetchAll() as $item) {
                    ?>
                    <tr>
                        <td>
                            <?php echo date('d/m/Y H:i:s', strtotime($item['data_operacao']));  ?>
                        </td>
                        <td>
                            <?php if ($item['tipo'] == '1') { ?>
                            <span style="color:green">
                                R$ <?php echo $item['valor']; ?>
                            </span>
                            <?php } else { ?>
                            <span style="color:red">
                                R$ -<?php echo $item['valor']; ?>
                            </span>
                            <?php } ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </body>
</html>