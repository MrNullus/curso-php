<?php  
session_start();

require 'config.php';
require 'utils.php';

$sql = "SELECT id FROM usuarios";
$sql = $pdo->query($sql);

$usuarios = array();

if ($sql->rowCount() > 0) {

	foreach ($sql->fetchAll() as $chave => $usurio) {
		$usuario[$chave]['filhos'] = calcular_cadastros(
			$usuario['id'], $limite
		);
	}

}


$sql = "SELECT id FROM usuarios";
$sql = $pdo->query($sql);

$patentes = array();

if ($sql->rowCount() > 0) {
	$patentes = $sql->fetchAll();
}

foreach ($usuarios as $usuario) {

	foreach ($patentes as $patente) {

		if (intval($usuario['filhos']) >= intval($patente['min'])) {

			$sql = "
			UPDATE 
				usuarios 
			SET 
				patente = :patente 
			WHERE id = :id
			";

			$sql = $pdo->prepare($sql);
			$sql->bindValue(':id', $usuario['id']);
			$sql->bindValue(':patente', $patente['id']);

			$sql->execute();
			break;
		}

	}

}

?>