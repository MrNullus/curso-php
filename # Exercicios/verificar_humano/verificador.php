<?php
session_start();

if ($_SESSION['v'] == $_POST['number']) {
    echo "<h1>É HUMANO, TÁ OK!</h1>";
} else {
    echo "<h1>FAKE NEWS!</h1>";
}
?>