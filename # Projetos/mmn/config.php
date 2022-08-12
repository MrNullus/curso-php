<?php  
try {
	global $pdo;

	$pdo = new PDO("mysql:dbname=projeto_mmn;host=localhost", "root", "");

} catch (PDOException $e) {

	echo "ERROR MESSAGE:". $e->getMessage();
	exit;

}

$limite = 3;
$patentes = array(

);
?>