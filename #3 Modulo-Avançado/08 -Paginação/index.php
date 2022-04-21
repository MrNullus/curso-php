<?php
try {
    $dsn = "mysql:dbname=blog;host=localhost";
    $dbuser = "root";
    $dbpass = "";
    $pdo = new PDO($dsn, $dbuser, $dbpass);

} catch (PDOException $e) {
    die($e->getMessage());
}

$qt_por_paginas = 10;

$total = 0;
$sql = "SELECT COUNT(*) as c FROM post";
$sql = $pdo->query($sql);
$sql = $sql->fetch();

$total = $sql['c'];
$paginas = $total / $qt_por_paginas;

$pg = 1;
if (isset($_GET['p']) && !empty($_GET['p'])) {
    $pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * 2;

$sql = "SELECT * FROM post LIMIT $p, $qt_por_paginas";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {

    foreach ($sql->fetchAll() as $item){

        echo $item['id']." - ".$item['titulo']."<br />";

    }

}

echo "<br />";
echo "-- TOTAL DE PÁGINAS ".$total." --";
echo "<br />";
echo "<br />";
for ($q=0; $q < $paginas; $q++) { 
    echo '<a href="./?p='.($q + 1).'">['.($q + 1).']</a>';
}

?>
