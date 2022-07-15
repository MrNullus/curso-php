<style>
	.message { font-size: 1.2rem; border: 2px solid #111; border-radius: 12px; padding: 12px; word-break: break-all; box-shadow: 1px 1px 1px black;}
	.error {  color: #ff4545; }
</style>

<?php  
// @ Configs Initial @
require 'dependencies.php';

$cars = new Cars($pdo);
$reservs = new Reservs($pdo);

$list = $cars->getCars();

// @ Verificar envio de dados @
if (!empty($_POST['data_fim']) && !empty($_POST['data_inicio'])) {
	#= pegar valores =#
	$carro = addslashes($_POST['carro']);
	$data_inicio = date_formated($_POST['data_inicio'], 'data_inicio');
	$data_fim = date_formated($_POST['data_fim'], 'data_fim');
	$pessoa = addslashes($_POST['pessoa']);

	#= verificar disponibilidade da reserva recebida =#
	if ($reservs->verify_disponibility($carro, $data_inicio, $data_fim)) {
		$reservs->reservar($carro, $data_inicio, $data_fim, $pessoa);

		header("Location: index.php");
		exit;
	} else {
		$msg = "Esse carro já se encontra reservado nesse périodo! :(";
	}

}

?>

<h1 style="text-align: center;color: #AE1BFA;">
	<span style="color:black;">i</span>Reserv<span style="color: black;">σ</span>
</h1>
<center>

<h2>Adicionar Reserva</h2>



<form method="POST">
	Carro: 
	<select name="carro" id="carro">
		<?php foreach ($list as $carro): ?>
			<option value="<?php echo $carro['id']; ?>">
				<?php echo $carro['nome']; ?>
			</option>
		<?php endforeach; ?>
	</select>
	<br><br>

	Data de Início: <br>
	<input type="text" name="data_inicio" id="data_inicio" />
	<br><br>

	Data de Fim: <br>
	<input type="text" name="data_fim" id="data_fim" />
	<br><br>

	Nome da Pessoa: <br>
	<input type="text" name="pessoa" id="pessoa" />
	<br><br>

	<button type="submit">Reservar!</button>
</form>

<br><br>
<?php 
	if (!empty($_POST['data_fim']) && !empty($_POST['data_inicio'])) {
		show_message($msg, 'error');
	}
?>
</center>
