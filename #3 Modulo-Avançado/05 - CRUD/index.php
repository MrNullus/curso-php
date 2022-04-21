<?php
require 'banco.php';

// - CONNECTION
$banco = new Banco("localhost", "blog", "root", "");

// - SELECT
$banco->query("SELECT * FROM post");

echo "Qt de posts: ". $banco->numRows();
echo "<br /><br />";

if ($banco->numRows() > 0) {
    foreach ($banco->result() as $post) {
        echo "Titulo: ". $post['titulo'] ."<br />";
        echo "Corpo: ". $post['corpo']. "<br />";
        echo "<hr />";
    }
} else {
    echo "<h2>Sem Resultados...</h2>";
}
// - INSERT
// $banco->insert("post", array(
//     "titulo" => "Francielly não olha mais para mim",
//     "corpo" => "Francielly me deixou faz meses desde o ano passado."
// ));

// - UPDATE
// $banco->update("post", array("titulo" => "isso eh teste saporra"), array("id" => "1"));

$banco->delete("post", array("id"=>"1", "id"=>"2"), "OR");

?>