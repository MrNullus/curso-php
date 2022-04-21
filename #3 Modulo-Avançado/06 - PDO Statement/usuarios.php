<?php
class Usuarios {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:dbname=blog;localhost", "root", "");
        } catch (PDOException $e) {
            echo "Falhou: ". $e->getMessage();
        }    

    }

    public function selecionar($id) {
        $sql = $this->db->prepare(
            "SELECT * FROM usuarios WHERE id = :id"
        );
        $sql->bindValue(":id", $id);
        $sql->execute(); 

        $array = array();

        if ($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }

        return $array;

    }

    public function inserir($nome, $email, $senha) {
        $sql = $this->db->prepare(
            "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha"
        );
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":senha", md5($senha));
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id) {
        $sql = $this->db->prepare(
            "UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE id = ?"
        );
        $sql->execute(array($nome, $email, md5($senha), $id));
    }

    public function excluir($id) {
        $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
        $sql->bindValue(1, $id);
        $sql->execute();

        echo "Usuario excluido: ". $id;
    }

}

?>