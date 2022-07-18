<?php  
try {
	$pdo = new PDO("mysql:dbname=projeto_loginunico;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Error: ". $e->getMessage();
}
?>