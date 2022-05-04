<?php
class fotos extends Model {

    public function __construct() {
        //* vai rodar o __construct() do Model
        parent::__construct();
    }

    public function getFotos() {
        $array = array();

        $sql = "SELECT * FROM fotos";
        $sql = $this->db->query($sql);

        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }

        return $array;

    }

}

?>