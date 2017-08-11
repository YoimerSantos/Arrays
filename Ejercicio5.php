<?php
$sueldo = array(207,27000,150000 );

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio5</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h3>Calcular la paga neta de un trabajador conociendo el numero de horas trabajadas, la tarifa horaria y la tasa de impuestos:</h3>
    <h3><?php echo "Horas trabajadas= ".$sueldo[0]."<br><br> Tarifa horaria= ".$sueldo[1]." <br><br> Tasa de impuesto= ".$sueldo[2]." "; ?></h3>
    <?php
    $paganeta=($sueldo[0]*$sueldo[1])-$sueldo[2];
    echo "El pago neto del trabajador es: $paganeta";
     ?>
  </body>
</html>
