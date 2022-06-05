<?php
/*
	* Usando o 'ob'
		-> 'ob' por assim dizer é um cnjunt de funções muito uteis usadas 
		¬ para mexer cm salvamento de dados na memoria

	* Para começar é preciso primeiro:
		? inicializar com a função ob_start()
		? finalizar com a função ob_end_clean()
		ob_start();
			# code...
		ob_end_clean();	
	! todo bloco de codigo dentro dessas functions serão guardados na memoria 
	¬ e não serão exibidos para o usuario

	* Pegar os dados salvos na memoria:
		? irá retornar os dados salvos na memoria 
		ob_get_contents()
*/

if (file_exists('cache.cache')) {
	require 'cache.cache';
} else {
	ob_start();
		require 'pagina.php';
		$html = ob_get_contents();
	ob_end_clean();

	file_put_contents('cache.cache', $html);
	echo $html;
}

?>