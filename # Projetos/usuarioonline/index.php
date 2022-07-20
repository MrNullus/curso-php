<?php  
try {
	$pdo = new PDO("mysql:dbname=projeto_usuarioonline;host=localhost", "root", "");
} catch (PDOException $e) {
	"ERROR: ". $e->getMessage();
	exit;
}

$ip = $_SERVER['REMOTE_ADDR'];
$hora = date('H-i-s');

$sql = $pdo->prepare("INSERT INTO acessos (ip, hora) VALUES (:ip, :hora)");
$sql->bindValue(":ip", $ip);
$sql->bindValue(":hora", $hora);
$sql->execute();

$sql = $pdo->prepare("DELETE FROM acessos WHERE hora = :hora");
$sql->bindValue(":hora", date('H-i-s', strtotime("-2 minutes")));
$sql->execute();

$sql = "SELECT * FROM acessos WHERE hora > :hora GROUP BY ip";
$sql = $pdo->prepare($sql);
$sql->bindValue(":hora", date('H-i-s', strtotime("-5 minutes")));
$sql->execute();
$online = $sql->rowCount();

echo "Usuarios: ".$online;

?>