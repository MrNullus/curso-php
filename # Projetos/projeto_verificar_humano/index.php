<?php
session_start();

$n1 = rand(0, 10);
$n2 = rand(0, 10);

$_SESSION['v'] = $n1 + $n2;
?>

<html>
<head>
    <title>Verificador de Humano</title>
</head>
<body>
    <h1>Verificador de Humano</h1>

    <form method="POST" action="verificador.php">
        <?php echo $n1; ?> + <?php echo $n2; ?> = 
        <input type="number" name="number" id="number" />

        <button type="submit">Verificar</button>
    </form>
</body>
</html>
