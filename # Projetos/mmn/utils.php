<?php  

function listar($id, $limite) {
	global $pdo;
	$lista = array();

	$sql = $pdo->prepare(
		"SELECT * FROM usuarios WHERE id_pai = :id"
	);
	$sql->bindValue(":id", $id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$lista = $sql->fetchAll(PDO::FETCH_ASSOC);

		foreach ($lista as $chave => $usuario) {

			if ($limite > 0) {
				$atualLimite = $limite - 1;
				$limite = $atualLimite;

				$lista[$chave]['filhos'] = listar($usuario['id'], $limite);
			}

		}

	}

	return $lista;
}


function exibir($array) {
	echo '<ul>';
	echo '<br />';

	foreach ($array as $usuario) {
		echo '<li>';

		echo $usuario['nome'] .'('.count($usuario['filhos']).' cadastros diretos)';
		if (count($usuario['filhos']) > 1) {
			exibir($usuario['filhos']);
		} 

		echo '</li>';
	}

	echo '<br />';
	echo '</ul>';
}	

?>