<?php
  $numero = array(6 );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio3</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Algoritmo que pida un entero lo eleve al cubo y lo muestre en pantalla:</h3>
    <h3><?php echo "Numero ingresado = ".$numero[0]." "; ?></h3>
    <?php

    $cubo=pow($numero[0],3);
    echo "El cubo del numero ".$numero[0]." es: $cubo";
     ?>

  </body>
</html>
