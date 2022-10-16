<?php  

function calcular_cadastros($id, $limite) {
	global $pdo;
	$lista  = array();
	$filhos = 0;

	$sql = $pdo->prepare("
	SELECT 
		*
	FROM 
		usuarios 
	WHERE 
		id_pai = :id
	");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$lista = $sql->fetchAll(PDO::FETCH_ASSOC);

		$filhos = $sql->rowCount();

		foreach ($lista as $chave => $usuario) {

			if ($limite > 0) {
				$atualLimite = $limite - 1;
				
				$filhos += calcular_cadastros(
					$usuario['id'], $atualLimite
				);
			}

		}
	}

	return $filhos;
}

function listar($id, $limite) {
	global $pdo;
	$lista = array();

	$sql = $pdo->prepare("
	SELECT 
		usuarios.id, usuarios.id_pai, 
		usuarios.patente, usuarios.nome, 
		patentes.nome as p_nome
	FROM 
		usuarios 
	LEFT JOIN 
		patentes ON patentes.id = usuarios.patente
	WHERE 
		usuarios.id_pai = :id
	");
	$sql->bindValue(":id", $id);
	$sql->execute();

	if ($sql->rowCount() > 0) {
		$lista = $sql->fetchAll(PDO::FETCH_ASSOC);

		foreach ($lista as $chave => $usuario) {

			if ($limite > 0) {
				$lista[$chave]['filhos'] = array();
				$atualLimite = $limite - 1;

				$lista[$chave]['filhos'] = listar(
					$usuario['id'], $atualLimite
				);
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

		echo $usuario['nome'] .'('.count($usuario['p_nome']).' cadastros direto)';
		if (count($usuario['filhos']) > 1) {
			exibir($usuario['filhos']);
		} 

		echo '</li>';
	}

	echo '<br />';
	echo '</ul>';
}	

?>