<?php
$numero = array(7);

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio6</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
   <h3>Algoritmo que resuelva las siguientes operaciones: <br> 1) El doble de un numero entero. <br> 2) El triple de un numero entero</h3>
   <h3><?php echo "Valor de numero es= ".$numero[0].""; ?></h3>
   <?php
    $doble=$numero[0]*2;
    $triple=$numero[0]*3;
    echo "El doble del numero ".$numero[0]." es: $doble <br> <br> El triple del numero ".$numero[0]." es: $triple";

    ?>
  </body>
</html>
