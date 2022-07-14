<?php
$arr = array(1, 345, 2434, 123, 112, 34,12, 1);
$max = 0;

foreach ($arr as $item) {
	if ($item >= $max) {
		$max = $item;
	}
}

?>
<br>
<center>
<pre>
<?php echo print_r($arr); ?>
</pre>

<h4>Maior número: <?php echo $max; ?></h4>
</center>