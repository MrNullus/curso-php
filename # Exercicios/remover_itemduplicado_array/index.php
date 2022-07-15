<?php
$arr = array(1,2,3,4,6,5,21,1,3,5,45,7,8,4,23,4,246,54,532,424,3,3,2,2,1,1,3,4,5);

// vai retornar um array com elementos unicos
$arrayTrated = array_unique($arr, SORT_REGULAR);
?>

<pre>
<code>
<?php print_r($arrayTrated);?>
</code>
</pre>
