<?php 

require 'Tempo.class.php';

$t = '2019-05-15 08:00:00';
$data = date('d/m/Y', strtotime($t));

echo $data .' <br/> foi há '. Tempo::diferenca($t);

?> 