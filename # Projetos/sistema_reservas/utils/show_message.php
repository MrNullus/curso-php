<?php 
function show_message($msg, $action) {
	echo(
	"<span class='message ".$action."'>".
		$msg
	."</span>"
	);
}
?>