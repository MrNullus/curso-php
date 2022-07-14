<?php
if (!empty($_POST['operand_1']) || !empty($_POST['operand_2'])) {
    $operand_1 = floatval($_POST['operand_1']);
    $operand_2 = floatval($_POST['operand_2']);
    $operator = $_POST['operator'];
    
    $msg = "";
    $result = 0;
    switch($operator) {
        case "+":
            $result = $operand_1 + $operand_2;
            $msg = "$operand_1 + $operand_2 = $result";
            break;

        case "*":
            $result = $operand_1 * $operand_2;
            $msg = "$operand_1 * $operand_2 = $result";
            break;

        case "-":
            $result = $operand_2 - $operand_1;
            $msg = "$operand_2 - $operand_1 = $result";
            break;

        case "/":
            $result = $operand_2 / $operand_1;
            $msg = "$operand_2 / $operand_1 = $result";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Calculadora Básica</title>
</head>
<body>
    <h1>Calculadora Básica</h1>    

    <form method="POST">
        <input type="text" name="operand_1" id="operand_1" pattern="[0-9,.]{1,}" />

        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="text" name="operand_2" id="operand_2" pattern="[0-9,.]{1,}" />
        <br><br>

        <button type="submit">Calcular</button>
    </form>

    <br><br>
    <span style="color: green;">
    <?php 
    if (!empty($_POST['operand_1']) || !empty($_POST['operand_2'])) {
        echo $msg;
    } 
    ?>
    </span>

</body>
</html>