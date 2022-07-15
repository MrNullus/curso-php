<?php
// @ Configs Initial @
try {
	$pdo = new PDO("mysql:dbname=projeto_sistema_reservas;host=localhost", "root", "");

} catch (PDOException $e) {
	echo "ERROR:". $e->getMessage();
}

?>