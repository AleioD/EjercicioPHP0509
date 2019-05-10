<?php
  $edad = 19;
  $casado = false;
  $sexo = [
    "Masculino",
    "Femenino",
    "Otro"
  ];

  $sexoReal = $sexo[1];

  if ($sexoReal == "Otro") {
    echo "¡Bienvenido!";
  } elseif ($edad > 18 && !$casado) {
    echo "¡Bienvenido!";
  }
 ?>
