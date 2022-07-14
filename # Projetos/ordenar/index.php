<?php
function prepare_html($search, $replace, $subject) {
    $html = str_replace($search, $replace, $subject);
    return $html;
}

//* connection to database
try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=projeto_ordenar", 
        "root", 
        ""
    );
} catch (PDOException $e) {
    echo("Error: " . $e->getMessage());
    exit();
}

if (isset($_GET['ordem']) && !empty($_GET['ordem'])) {
    $ordem = addslashes($_GET['ordem']);
    $sql = "SELECT * FROM usuarios ORDER BY ". $ordem;
} else {
    $ordem = "";
    $sql = "SELECT * FROM usuarios";
}
?>

<form method="GET">
    <select name="ordem" id="ordem" onchange="this.form.submit()">
        <?php 
            $ordens = array("nome", "idade");

            foreach ($ordens as $option) {
                $option_html = "<option value=':option:' :selected:>Ordenar por :option:</option>";
                $selected = ($ordem == $option) ? "selected" : "";
                $search = [":option:", ":selected:"];
                $replace = [$option, $selected];
                
                $option_html_finally = prepare_html($search, $replace, $option_html);
                echo $option_html_finally;
            }
        ?>
    </select>
</form>

<table border="1" width="400"> 
    <tr bgcolor="#454545" style="color: #eee;">
        <th># ID</th>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

    <?php
        //* query to database
        $sql = $pdo->query($sql);
        if ($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $user) {
                $user_html = "
                    <tr>
                        <td>:id:</td>
                        <td>:nome:</td>
                        <td>:idade:</td>
                    </tr>
                ";

                $search = [":id:", ":nome:", ":idade:"];
                $replace = [$user['id'], $user['nome'], $user['idade']];

                $td_finally = prepare_html($search, $replace, $user_html);
                echo($td_finally);
            }
        } else {
            echo("<tr>");
            echo("<td colspan='3'>Nenhum usuário cadastrado</td>");
            echo("</tr>");
        }
    ?>
</table>

