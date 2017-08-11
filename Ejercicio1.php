<?php

 $numeros = array(4, 6, 9 );
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio1</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h4>Algoritmo que calcule el promedio  de tres nota y lo Imprima en pantalla en pantalla</h4>

    <h4><?php echo "Nota numero1: ".$numeros[0]."<br><br> Nota numero 2: ".$numeros[1]." <br><br> Nota numero3: ".$numeros[2].""; ?></h4>
    <?php

   $promedio = ($numeros[0]+$numeros[1]+$numeros[2]/3);
   echo "El promedio de notas es: $promedio";

     ?>
  </body>
</html>
