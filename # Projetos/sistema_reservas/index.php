<?php  
// @ Configs Initial @
require 'dependencies.php';

$reservs = new Reservs($pdo);
?>

<h1 style="text-align: center;color: #AE1BFA;"><span style="color:black;">i</span>Reserv<span style="color: black;">σ</span></h1>

[<a href="reserv.php">Adicionar Reserva</a>]
<br><br>

<?php 
$list = $reservs->getReservs();

foreach ($list as $item) {
	$data_inicio = date('d/m/Y', strtotime($item['data_inicio']));
	$data_fim = date('d/m/Y', strtotime($item['data_fim']));

	echo $item['pessoa'].' reservou o carro '.$item['id_carro'].' entre '.$data_inicio.' e '.$data_fim.'<br>';
}
?>

<hr>
<br>

<?php 
require 'calendario.php' 
?>