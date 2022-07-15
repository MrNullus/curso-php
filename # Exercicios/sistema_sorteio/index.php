<?php
$person = array(
	"Godofredo",
	"Klateia",
	"Klaus",
	"Luas",
	"Zalatiel",
	"Pamela"
);
$people = $person[array_rand($person)];
?>

<center>
	<h1>Sistema Sorteio</h1>
	<strong>Pessoa Sorteada:</strong> <?php echo $people; ?>
	<br><br>

	<form>
		<button type="submit">Sortear</button>
	</form>
</center>
