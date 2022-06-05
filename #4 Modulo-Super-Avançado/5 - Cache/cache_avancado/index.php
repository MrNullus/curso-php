<?php
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