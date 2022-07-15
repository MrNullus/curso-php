<?php 
function replace_values($conn, $find_arr = array()) {
	foreach ($find_arr as $key => $value) {
		$conn->bindValue($key, $value);
	}
}
?>