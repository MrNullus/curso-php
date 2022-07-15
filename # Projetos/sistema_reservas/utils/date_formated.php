<?php 
function date_formated($date_input, $name_input = 'none', $input_form = true) {

	if ($input_form == true) {
		$date_input = explode('/', addslashes($_POST[$name_input]));
		$date_input = $date_input[2].'-'.$date_input[1].'-'.$date_input[0];

		$date_output = $date_input;
	} else {
		$date_input = explode('/', addslashes($date_input));
		$date_input = $date_input[2].'-'.$date_input[1].'-'.$date_input[0];

		$date_output = $date_input;
	}

	return $date_output;
}


?>
