<?php
$digits = array(
	"um" => 1, "dois" => 2,
	"três" => 3, "quatro" => 4, 
	"cinco" => 5,"seis" => 6,
	"sete" => 7, "oito" => 8,
	"nove" => 9, "dez" => 10
);
$wordlist = array();
$output = array();


if (isset($_POST['wordlist']) && !empty($_POST['wordlist'])) {
	$wordlist = $_POST['wordlist'];
	$wordlist = explode(',', $wordlist);

	foreach ($wordlist as $word) {
		if (isset($digits[$word])) {
			$output[$word] = $digits[$word];
		}	
	}
}
?>

<html>
	<head>
		<title>Exercicio - Conversor Palavra em Digito</title>
	</head>

	<body>
		<h1>Exercicio - Conversor Palavra em Digito</h1>

		<form method="POST">
			<input type="text" name="wordlist" id="wordlist" />
			<br><br>

			<button type="submit">Converter</button>
		</form>

		<hr>
		Entrada:
		<?php foreach ($output as $out => $word) {
			echo $out.",";	
		} ?>
		<br>

		Saída:
		<?php foreach ($output as $out => $word) {
			echo $word.",";			
		} ?>		

	</body>
</html>