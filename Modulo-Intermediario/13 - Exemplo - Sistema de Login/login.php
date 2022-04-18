<?php
    session_start();

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $dsn = "mysql:dbname=blog;host=localhost";
        $dbuser = "root";
        $dbpass = "";

        try {
            $db = new PDO($dsn, $dbuser, $dbpass);
            
            $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

            if ($sql->rowCount() > 0) {

                $dado = $sql->fetch();

                $_SESSION["id"] = $dado["id"];
                // print_r($dado);

                header("Location index.php");
            }

        } catch (PDOException $e) {
            echo "Falhou: ". $e;
        }

    }
?>
<br />

Página de Login

<form method="POST">
    <label for="email">Email:</label>
    <input 
        type="email" 
        id="email" 
        name="email" 
    />
    <br />

    <label for="senha">Senha:</label>
    <input 
        type="password" 
        id="senha" 
        name="senha" 
    />
    <br />

    <input 
        type="submit" 
        value="Entrar!" 
    />
</form>