<?php
  //*** vai incluir o arquivo 'recebedor' a esse
  require "recebedor.php";
  //? mas se der erro, vai parar a aplicação

  //*** vai incluir o arquivo 'recebedor' a esse
  //? mas se der erro, não vai parar a aplicação
  include "recebedor.php";
?>

<form method="POST">
  <label for="email">Email:</label>
  <input type="email" name="email" value="email" />
  <br />

  <input type="submit" value="Enviar Dados" />
</form>