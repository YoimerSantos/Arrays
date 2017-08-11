<?php
  $medidas = array(6, 3 );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio3</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Agoritmo que calcule el area de un rectangulo:</h3>
    <h3><?php echo "Base = ".$medidas[0]."<br><br> Altura= ".$medidas[1]." "; ?></h3>
    <?php

    $area=($medidas[0]*$medidas[1]);
    echo "El area del rectangulo es: $area";
     ?>

  </body>
</html>
