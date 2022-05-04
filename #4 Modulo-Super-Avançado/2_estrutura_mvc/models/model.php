<?php
class model {

    protected $db;

    public function __construct() {
        global $config;
        $this->db = new PDO(
            "mysql:dbname".$config['dbname'].";dbhost=".$config['host'], 
            $config['dbuser'], 
            $config['dbpass']
        );
    }

}

?>