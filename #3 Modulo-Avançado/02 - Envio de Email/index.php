<?php
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $email = addslashes($_POST['email']);
        $nome = addslashes($_POST['nome']);
        $msg = addslashes($_POST['msg']);

        $para = "gustavojs417@gmail.com";
        $assunto = "Pergunta do ". $nome;
        $corpo = "Nome: ". $nome ." - Email: ". $email. "Mensagem: ". $msg;
        $cabecalho = 
            "From: gustavojs417@gmail.com"."\r\n".
            "Reply-To: ".$email."\r\n".
            "X-Mailer: PHP/".phpversion()
        ;

        // ? função para enviar emails
        mail($para, $assunto, $corpo, $cabecalho);

        echo "<h2>Email enviado com sucesso!!!!!</h2>";
        exit;
    }
?>

<form method="POST">
    Nome: <br />
    <input 
        type="text" 
        name="nome" 
        id="nome" 
    />
    <br />

    Email: <br />
    <input
        type="email" 
        name="email" 
        id="email" 
    />
    <br />
    
    Mensagem: <br />
    <textarea name="msg"></textarea>
    <br />
    <br />

    <input type="submit" value="Enviar!" />

</form>