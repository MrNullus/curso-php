<?php  
try {
	$pdo = new PDO("mysql:dbname=projeto_rating;host=localhost", "root", "");
} catch (PDOException $e) {
	echo "Error: ". $e->getMessage();
}

$sql = "SELECT * FROM filmes";
$sql= $pdo->query($sql);

if ($sql->rowCount() > 0) {
	foreach ($sql->fetchAll() as $filme) :
	?>
	<fieldset>
		<strong>
			<?php echo $filme['titulo']; ?>
		</strong>
		<br><br>

		<a 
			href="votar.php?id=<?php echo $filme['id']; ?>&voto=1">
			<strong>*</strong>	
		</a>
		<a 
			href="votar.php?id=<?php echo $filme['id']; ?>&voto=2">
			<strong>*</strong>	
		</a>
		<a 
			href="votar.php?id=<?php echo $filme['id']; ?>&voto=3">
			<strong>*</strong>	
		</a>
		<a 
			href="votar.php?id=<?php echo $filme['id']; ?>&voto=4">
			<strong>*</strong>	
		</a>
		<a 
			href="votar.php?id=<?php echo $filme['id']; ?>&voto=5">
			<strong>*</strong>	
		</a>
	
		<?php echo $filme['media']; ?>
	</fieldset>
	<br>
	<?php
	endforeach;
} else {
	echo "Filmes não cadastrados :(";
}
?>