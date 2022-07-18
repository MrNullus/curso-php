<?php
require '../index.php';
echo "<br>";

$campo = new Campo();
$campo->setDados(20, 20, 40);

echo "Me de a largura :v ".$campo->getLargura();
echo "<br>";
echo "Qual a altura?: ".$campo->getAltura();
echo "<br>";
echo "Revele o comprimento :$ ".$campo->getComprimento();

?>  