<?php
$wordInput = '';
$wordReversed = '';

if (isset($_GET['word']) && !empty($_GET['word'])) {
	$wordInput = $_GET['word'];
	$wordReversed = strrev($wordInput);
}
?>

<h1>Reverter String</h1>

<form method="GET">
	<label for="word">Palavra/Frase:</label> <br>
	<input type="text" name="word" id="word">
	<br><br>

	<button type="submit">Reverter</button>
</form>

<hr>

<strong>Input:</strong> <?php echo $wordInput; ?>
<br>
<strong>Output:</strong> <?php echo $wordReversed; ?>