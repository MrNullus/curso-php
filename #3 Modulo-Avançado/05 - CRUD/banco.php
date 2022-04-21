<?php

class Banco {
    private $pdo;
    private $numRows;
    private $array;

    public function __construct($host, $dbname, $dbuser, $dbpass) {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
        } catch (PDOException $e) {
            echo "<h4>Falhou: ".$e->getMessage()."</h4>";
        }
    }

    public function query($sql) {
        $query = $this->pdo->query($sql);
        $this->numRows = $query->rowCount();
        $this->array = $query->fetchAll();
    }

    public function result() {
        return $this->array;
    }

    public function numRows() {
        return $this->numRows;
    }

    private function checkedInsert($t, $d) {
        if (!empty($t) && (is_array($d) && count($d) > 0)) {
            return true;
        } else {
            return false;
        }
    }
    private function checkedInsertUpdate($t, $d, $w) {
        if (!empty($t) && (is_array($d) && count($d) > 0) && is_array($w)) {
            return true;
        } else {
            return false;
        }
    }
    private function checkedInsertDelete($t, $w) {
        if (!empty($t) && count($w) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($table, $data) {
        if ($this->checkedInsert($table, $data)) {
            $sql = "INSERT INTO ". $table ." SET ";

            $dados = array();
            foreach ($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }

            $sql .= implode(", ", $dados);
            // echo $sql;
            $this->pdo->query($sql);
        }
    }

    public function update($table, $data, $where = array(), $where_cond = "AND") {

        if ($this->checkedInsertUpdate($table, $data, $where) ) {
            $sql = "UPDATE ".$table." SET ";

            $dados = array();
            foreach ($data as $chave => $valor) {
                $dados[] = $chave." = '".addslashes($valor)."'";
            }

            $sql .= implode(", ", $dados);

            if (count($where) > 0) {
                $dados = array();
                foreach ($data as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }

                $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
            }

            // echo $sql;
            $this->pdo->query($sql);
        }

    }

    public function delete($table, $where, $where_cond = "AND") {
        if ($this->checkedInsertDelete($table, $where)) {
            $sql = "DELETE FROM ".$table;

            if (count($where) > 0) {
                $dados = array();
                foreach ($where as $chave => $valor) {
                    $dados[] = $chave." = '".addslashes($valor)."'";
                }

                $sql = $sql." WHERE ".implode(" ".$where_cond." ", $dados);
            }

            // echo $sql;
            $this->query($sql);
            echo "Deletado com Sucesso.";
        }

    }

}

?>