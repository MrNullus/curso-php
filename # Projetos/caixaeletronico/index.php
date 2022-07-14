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

// buscar apenas o tipo de transação
$sql = $pdo->prepare("SELECT tipo FROM historico WHERE id_conta = :id_conta");
$sql->bindValue(":id_conta", $id);
$sql->execute();
$tipoTransac = $sql->fetch();
?>

<html>
    <head>
        <title>Caixa Eletrônico</title>
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>
        <header>
            <h1 class="logo">Banco Caixa Dois</h1>
            <h3>Sua confiança está em nós!</h3>
        </header>

        
        <main class="container">
            <section class="user-info">
                <div>
                    <a href="sair.php" class="btn btn-logout">Sair</a>
                </div>

                <div class="info">
                    <p>
                        <strong>Titular:</strong> <?php echo $info['titular']; ?> 
                    </p>
                    <p>
                        <strong>Agência:</strong> <?php echo $info['agencia']; ?>
                    </p>
                    <p>
                        <strong>Conta:</strong> <?php echo $info['conta']; ?>
                    </p>
                    <p>
                        <strong>Saldo:</strong> 
                        <?php if ($tipoTransac["tipo"] == '1') { ?>
                        <span style="color:green">
                            R$ <?php echo $info['saldo']; ?>
                        </span>
                        <?php } else { ?>
                        <span style="color:red">
                            R$ -<?php echo $info['saldo']; ?>
                        </span>
                        <?php } ?>
                    </p>
                </div>
            </section>
            <hr />
            <br>

            <section class="historic">
                <div class="header">
                    <h3>Movimentação/Extrato</h3>

                    <a href="add_transacao.php" class="btn btn-add">
                        Adicionar Transação
                    </a>
                </div>


                <table class="table-extract" id="table-extract">
                    <tr>
                        <th>Data</th>
                        <th>Valor</th>
                    </tr>

                    <?php if ($sql->rowCount() > 0) {
                        $sql = $pdo->prepare("SELECT * FROM historico WHERE id_conta = :id_conta");
                        $sql->bindValue(":id_conta", $id);
                        $sql->execute();

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
                    } ?>
                </table>
            </section>
        </main>


        <footer>
            <h1 class="logo">Banco Caixa Dois</h1>     

            <h4>&copy; Ms. Heimdall</h4>
        </footer>
    </body>
</html>
