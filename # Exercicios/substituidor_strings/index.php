<?php
$str_formated = '';

if (isset($_GET['word']) && !empty($_GET['word'])) {
	$word = $_GET['word'];
	$find = $_GET['find'];
	$replace = $_GET['replace'];
	$str_formated = str_replace($find, $replace, $word);
}
?>

<h1>Substituidor Strings</h1>

<form method="GET">
	Palavra:<br>
	<input type="text" name="word" id="word" />
	<br><br>

	Proucurar por:<br>
	<input type="text" name="find" id="find" />
	<br><br>

	Substituir:<br>
	<input type="text" name="replace" id="replace" />
	<br><br>

	<button type="submit">Enviar</button>
</form>

<br>
<hr>
<br>

<strong>Input:</strong> <?php echo $word; ?>
<br><br>
<strong>Output:</strong> <?php echo $str_formated; ?>