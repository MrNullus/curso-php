<?php 
    if (isset($_POST['email']) && empty($_POST['email'])) {
        $email = $_POST['email'];

        echo "O meu email enviado eh ". $email;
    }
?>