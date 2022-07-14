<?php
require './config.php';
require './class/users.class.php';
session_start();

if (!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['password']));    

    $users = new Users($pdo);

    if ($users->signIn($email, $senha)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Usuario e senha estão errados!";
    }

}
?>

<style>
    * {
        box-sizing: border-box;
    }

    h1 {
        color: red;
        font-size: 2.5rem;
    }

    body {
        margin: 0;
        padding: 0;
        background: #222;
        color: #fff;
        font-family: Consolas;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    main {
        background: #4445;
        margin: auto;
        width: 400px;
        max-width: 400px;
        padding: 24px;
        border-radius: 12px;
    }

    input {
        width: 100%;
        height: 40px;
        border-radius: 5px;
    }

    input[type=submit] {
        cursor: pointer;
        border: 0;
        border-radius: 12px;
        background: #434645;
        color: #fff;
    }

    input[type=submit]:hover {
        opacity: 0.9;
    }
</style>

<main>
    <h1>Login</h1>

    <form method="POST">
        E-mail: <br /><br />
        <input 
            type="email" 
            name="email" 
            id="email"
        />
        <br />
        <br />

        Senha: <br /><br />
        <input 
            type="password" 
            name="password" 
            id="password" 
        />
        <br />
        <br />

        <input type="submit" value="Enviar" />
        
    </form>
</main>