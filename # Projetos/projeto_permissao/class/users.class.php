<?php
class Users {

    private $pdo;
    private $id;
    private $permissions;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function signIn($email, $senha) {
        $sql = "
        SELECT * FROM usuarios 
            WHERE 
                email = :email AND senha = :senha           
        ";
        $sql = $this->pdo->prepare($sql);

        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);        
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $sql->fetch();

            $_SESSION['logado'] = $sql['id'];

            return true;
        }
        
        return false;
    }

    public function setUser($id) {
        $this->id = $id;

        $sql = "
        SELECT * FROM usuarios 
            WHERE id = :id
        ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id", $this->id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $sql = $sql->fetch();
            $this->permissions = explode(',', $sql['permissoes']);

        }

    }

    public function getPermissions() {
        return $this->permissions;
    }

    public function isAllowed($permission) {
        if (in_array($permission, $this->permissions)) {
            return true;
        }
    }

}

?>