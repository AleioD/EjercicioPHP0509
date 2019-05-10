<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicios</title>
  </head>
  <body>
    <?php
      $persona = [
        "nombre" => "Jon",
        "apellido" => "Snow",
        "edad" => 27,
        "hobbies" => ["Netflix", "Fútbol", "Programar"]
      ];

      $persona["edad"] = 25;

      $persona["direccion"] = "Winterfell";
      $persona["hobbies"][] = "Dormir";
      var_dump($persona);
     ?>

  </body>
</html>
