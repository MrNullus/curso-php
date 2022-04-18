<?php
    /*  
    *   ** PDO **   *
        #> É uma biblioteca do PHP para conectar com Banco de Dados
    */

    //*** acessando o Banco de Dados
    $dsn = "mysql:host=localhost;dbname=blog";
    $dbuser = "root";
    $dbpass = "";

    //*** conectando ao Banco de Dados    
    try {
        $pdo = new PDO($dsn, $dbuser, $dbpass); 

        //*** selecionando Dados    
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->query($sql);

        // ? rowCount() |> conta as linhas
        if ($sql->rowCount() > 0) {
            // echo "Há usuarios sim!";

            // ? fetchAll() |> vai pegar todos os valores e colocar em um array
            foreach($sql->fetchAll() as $usuario) {
                echo "Nome: ". $usuario["nome"] ." - ". $usuario["email"] ."<br />";
            }

        } else {
            echo "Não há usuarios cadastrados!";
        }

        //*** Inserindo Dados    
        // $nome = "Testador de Fudelidade2";
        // $email = "testador2@hotmail.com";
        // $senha = md5("123");

        // $sql = "INSERT INTO usuarios SET nome='$nome', email='$email', senha='$senha'";
        // $sql = $pdo->query($sql);
        
        // echo "Usuario inserido com sucesso!";
        // ? vai retornar o 'id' do usuario inserido
        // echo "Usuario inserido: ". $pdo->lastInsertId();

        //*** Atualizando Dados
        // $sql = "UPDATE usuarios SET email = 'abc@hotmail.com'  WHERE email = 'testador2@hotmail.com'";
        // $sql = $pdo->query($sql);
        echo "Usuario Atualizado com sucesso!";

        //*** Removendo Dados
        $sql = "DELETE FROM usuarios WHERE id = 7";
        $sql = $pdo->query($sql);

        echo "Usuario deletado com sucesso!";

    } catch (PDOException $e) {
        echo "Falhou: ". $e->getMessage();
    }

?>