<?php
  //* isset verifica se o campo existe
  //* empty($var) |> retorna se a variavel está vazia ou não (true ou false)
  if (isset($_POST['email']) && !empty($_POST['email'])) {

    if (isset($_POST['senha']) && !empty($_POST['senha'])) {
      echo "Usuario enviou os dados!";

      $email = $_POST['email'];
      $senha = $_POST['senha'];

      echo "Meu email eh: " . $email;
      echo "<br />";
      echo "Minha senha eh: ". $senha;
    }
  }
?>
<br />

<form method="POST">
  <label for="email">E-mail:</label><br>
  <input type="email" name="email" id="email" />

  <label for="email">Senha:</label><br>
  <input type="password" name="senha" id="senha" />

  <input type="submit" name="submit" id="submit" value="Enviar Dados" />
</form>
