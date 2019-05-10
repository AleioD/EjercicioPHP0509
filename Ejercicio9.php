<?php
  $nota = 0;

  switch ($nota) {
    case $nota = 0 || $nota < 1 || $nota > 10:
      echo "El número no es válido";
      break;
    case $nota < 4:
      echo "Desaprobado";
      break;
    case $nota == 4 || $nota == 5:
      echo "Zafamos";
      break;
    case $nota >= 6 && $nota <=8:
      echo "¡¡¡Bien!!!";
      break;
    case $nota == 9:
      echo "¡¡¡MUY bien!!!";
      break;
    case $nota == 10:
      echo "¡¡¡Excelente!!!";
      break;
    default:
      echo "Ingrese una nota válida";
      break;
  }
 ?>
