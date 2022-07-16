<?php  
// @ Configs Initial @
require 'dependencies.php';

$reservs = new Reservs($pdo);
$cars = new Cars($pdo);
$list_cars = $cars->getCars();
?>

<h1 style="text-align: center;color: #AE1BFA;"><span style="color:black;">i</span>Reserv<span style="color: black;">σ</span></h1>

[<a href="reserv.php">Adicionar Reserva</a>]
<br><br>

<form method="GET">
	<select name="ano" id="ano">
		<?php for($y = date('Y'); $y > 2000; $y--): ?>
			<option value="<?php echo $y; ?>"><?php echo $y; ?></option>
		<?php endfor; ?>
	</select>

	<select name="mes" id="mes">
		<option value="01">01</option>
		<option value="02">02</option>
		<option value="03">03</option>
		<option value="04">04</option>
		<option value="05">05</option>
		<option value="06">06</option>
		<option value="07">07</option>
		<option value="08">08</option>
		<option value="09">09</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="02">12</option>
	</select>

	<input type="submit" value="Mostrar" />
</form>

<table cellpadding="6">
	<tr>
		<th># ID</th>
		<th>Nome</th>
	</tr>

	<?php foreach ($list_cars as $item): ?>
		<tr>
			<td> <?php echo $item['id']; ?> </td>
			<td> <?php echo $item['nome']; ?> </td>
		</tr>
	<?php endforeach ?>
</table>



<?php  
if (empty($_GET['ano'])) {
	exit;
}

$data = $_GET['ano'].'-'.$_GET['mes'];
$dia1 = date('w', strtotime($data));
$dias = date('t', strtotime($data));
$linhas = ceil(($dia1 + $dias) / 7);
$dia1 = -$dia1;
$data_inicio = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
$data_fim = date('Y-m-d', strtotime(( ($dia1 + ($linhas * 7) - 1) ).' days', strtotime($data)));

$list = $reservs->getReservs($data_inicio, $data_fim);

/*foreach ($list as $item) {
	$data_inicio = date('d/m/Y', strtotime($item['data_inicio']));
	$data_fim = date('d/m/Y', strtotime($item['data_fim']));

	echo $item['pessoa'].' reservou o carro '.$item['id_carro'].' entre '.$data_inicio.' e '.$data_fim.'<br>';
}*/
?>


<?php 
	require 'calendario.php' 
?>
