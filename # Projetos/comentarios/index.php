<?php
// configs iniciais
session_start();
require 'config.php';
$data = $_SESSION['logged'];

// verificar se SESSION existe
if (!isset($_SESSION['logged'])) {
    header("Location: login.php");
    exit;
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

       <div class="app-toolbar">
            <a href="sair.php" class="btn btn-danger">Sair</a>
        </div>
    </header>

    <main>
        <div class="app-form">
            <form method="POST" action="saveShit.php">
                <label for="shit" class="sr-only">Mensagem:</label> 
                <br />
                <textarea name="shit" id="shit" />
                </textarea>

                <button type="submit" class="btn btn-send-message">💩</button>
            </form>
        </div>

        <div class="app__visual">
            <?php
            // consultar as mensagens no BD
            $sql = 'SELECT * FROM mensagens ORDER BY data_msg DESC';
            $sql = $pdo->query($sql);

            // verificar se existem mensagens
            if ($sql->rowCount() > 0) {
                $nickname = $data['nickname'];

                // exibir mensagens
                foreach ($sql->fetchAll() as $menssage) { ?>
                    <div class="message cssarrow <?php if ($nickname == $menssage["nickname"]) {
                        echo "message_user";
                    } else {
                        echo "message_outer_user";
                    }?>">
                        <strong class="name_user">
                            <?php echo ucfirst($menssage['nickname']); ?>
                        </strong>
                        <p class="text-message">
                            <?php echo ucfirst($menssage['msg']); ?>
                        </p>
                        <p>
                            Enviada em <?php echo date('d/m/Y H:i:s', strtotime($menssage['data_msg'])); ?>
                        </p>
                        <p>
                            <?php if ($data['nickname'] == $menssage['nickname']): ?>
                            <a href="deleteShit.php?idShit=<?php echo $menssage["id"];?>" class="btn btn-delete-message">
                                Deletar
                            </a>
                            <?php endif; ?>
                        </p>
                        </div>        
                <?php }

            }  else {
                // exibir warning
                echo '<span class="show-warning">Nenhuma mensagem :( Seja o primeiro a  mandar uma Shit!</span>';
            }
            ?>
        </div>
    </main>

    <footer>
        <h4>ζ Holly Shit ζ</h4>
        <h5>&copy; Ms. Heimdall</h5>
    </footer>
</body>
</html>