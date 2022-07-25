<?php
session_start();
unset($_SESSION['mmnlogin']);	

header("Location: index.php");
exit;
?>