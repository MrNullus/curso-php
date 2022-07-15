<style>
	body {
		font-family: cursive;
	}
	td {
		color: #999;
	}
</style>
<h1 style="text-align: center; color: #14AE6F; font-weight:800; text-decoration: underline;">
	Tabuada
</h1>
<table cellpadding="12px" align="center">
<?php
// fazer a contagem (tabuada)
for ($i=1; $i <= 9; $i++) { 
	echo "
	<tr>
		<th>$i</th>";

	for ($j=2; $j <= 9; $j++) { 
		if ($i > 1) {
			$prod = $j * $i;
			echo "<td>$prod</td>";
		} else {
			echo "<th>$j</th>";
		}
	}
	echo "
	</tr>";
}
?>
</table>

<center>
<h5>&copy Ms.Heimdall</h5>
</center>