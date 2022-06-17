<?php
session_start();

try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=projeto_comentarios', 
        'root', 
        ''
    );
    
} catch (PDOException $e) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
    exit();
}

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $mensagem = $_POST['mensagem'];

    $sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, msg = :mensagem, data_msg = NOW()");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":mensagem", $mensagem);

    $sql->execute();
}
?>

<fieldset>
    <form method="POST">
        <?php if ( $_SESSION['logged'] === false): ?>
            <label for="nome">Nome:</label> 
            <br />
            <input type="text" name="nome" id="nome"> 
            <br /><br />
        <?php endif; ?>
        <label for="mensagem">Mensagem:</label> 
        <br />
        <textarea name="mensagem" id="mensagem">
        </textarea>
        <br /><br />

        <input type="submit" value="Enviar sua mensagem" />
    </form>
</fieldset>
<br><br><br>

<?php
$sql = 'SELECT * FROM mensagens ORDER BY data_msg DESC';
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $mensagem) : ?>
        <strong>
            <?php echo ucfirst($mensagem['nome']); ?>
        </strong>
        <p>
            <?php echo ucfirst($mensagem['msg']); ?>
        </p>
        <p>
            Enviada em <?php echo date('d/m/Y H:i:s', strtotime($mensagem['data_msg'])); ?>
        </p>
        <hr width="78%" align="left" color="#343454"/>
        <br><br>        
    <?php endforeach; 
}  else {
    echo 'Nenhuma mensagem :(';
}
?>


