<?php
session_start();

unset($_SESSION['logged']);
header("Location: login.php");
exit;
?>