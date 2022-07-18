<?php  
try {
	$pdo = new PDO("mysql:dbname=projeto_rating;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Error: ". $e->getMessage();
}

if (!empty($_GET['id']) && !empty($_GET['voto'])) {
	$id = intval($_GET['id']);
	$voto = intval($_GET['voto']);

	if ($voto >= 1 && $voto <= 5) {
		$sql = $pdo->prepare("INSERT INTO votos SET id_filme = :id_filme, voto = :voto");
		$sql->bindValue(":id_filme", $id_filme);
		$sql->bindValue(":voto", $voto);
		$sql->execute();

		$sql->query("
			UPDATE filmes 
			SET media = 
			( 
				SELECT (SUM(nota) / COUNT(*)) FROM votos WHERE votos.id_filme = filmes.id 
			) 
			WHERE id = :id");
		$sql->bindValue(":id");
		$sql->execute();

		header("Location: index.php");
		exit;
	}
}