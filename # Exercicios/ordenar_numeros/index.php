<?php
if (isset($_GET['numbers']) && !empty($_GET['numbers'])) {
	$numbersInput = $_GET['numbers']; 
	$arr_number = explode(",", $numbersInput);
	sort($arr_number);
}
?>

<h1>
	Receber e Ordernar Números
</h1>

<form method="GET">
	<label for="numbers">Digite os números:</label><br>
	<input type="text" name="numbers" id="numbers" />
	<br><br>

	<button type="submit">Enviar</button>
</form>

<hr>

<pre>
<code>
<?php print_r($numbersInput); ?>	
</code>
</pre>

Input: <strong><?php echo $numbersInput; ?></strong>
<br><br>
Output:
<?php for($i = 0; $i < count($arr_number); $i++): ?>
<strong><?php echo $arr_number[$i].","; ?></strong>
<?php endfor; ?>