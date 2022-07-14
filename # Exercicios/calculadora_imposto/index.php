<?php
if (isset($_GET['valor_produto']) && !empty($_GET['valor_produto'])) {
	$valor_final_produto = $_GET['valor_produto'];
	$taxa_imposto = $_GET['valor_imposto'];

	$valor_do_produto = $valor_final_produto - ($valor_final_produto * ($taxa_imposto/100));
	$valor_do_imposto = ($valor_do_produto - $valor_final_produto) * -1;
}
?>

<html>
	<head>
		<title>Exercicio - Calculadora de Imposto</title>
	</head>
	<body>
		<h1>Calculadora de Imposto</h1>

		<form method="GET">
			<label for="valor_produto">Valor do produto:</label><br>
			<input type="text" name="valor_produto" id="valor_produto">
			<br><br>

			<label for="valor_produto">Taxa do imposto: (%)</label><br>
			<input type="text" name="valor_imposto" id="valor_imposto">
			<br><br>

			<button type="submit">Calcular</button>
		</form>
		<br><br>

		Valor do produto: R$ <?php echo $valor_final_produto; ?>
		<br>
		Taxa de impost: <?php echo $taxa_imposto; ?>%
		
		<hr>

		Valor do Imposto: R$ <?php echo $valor_do_imposto; ?>	
		<br>
		Valor Produto: R$ <?php echo $valor_do_produto; ?>	

	</body>
</html>