<?php
  $medidas = array(3, 3 );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio2</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Agoritmo que calcule el area de un triangulo equilatero:</h3>
    <h3><?php echo "Lado1= ".$medidas[0]."<br><br> Lado2= ".$medidas[1]." "; ?></h3>
    <?php

    $area=($medidas[0]*$medidas[1])/2;
    echo "El area del triangulo es: $area";
     ?>

  </body>
</html>
