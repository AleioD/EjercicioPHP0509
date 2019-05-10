<?php
  $nombreDeUsuario = "Admin";
  $contraseniaDeUsuario = "1234";

  if ($nombreDeUsuario == "" || $contraseniaDeUsuario == "") {
    echo "Por favor, complete todos los campos";
  } elseif ($nombreDeUsuario == "Admin" && $contraseniaDeUsuario == "1234") {
    echo "¡Bienvenido!";
  } elseif ($nombreDeUsuario != "Admin") {
    echo "El nombre de usuario es incorrecto";
  } elseif ($contraseniaDeUsuario != "1234") {
    echo "La contraseña es incorrecta";
  }
 ?>
