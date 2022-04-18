<?php
  $x = 1;

  switch ($variable) {
    //* cases aninhados
    case 12:
    case 23:
      echo "O valor do x eh :". $x;
      break;

    case 1:
      echo "O valor do x eh :". $x;
      break;
    
    default:
      echo "O x eh ninguem, nada e muito menos lago a se importar.";
      break;
  }

?>
