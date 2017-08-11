<?php
$numeros = array(9,3);

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio7</title>
      <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h4>Algoritmo que pida dos numeros enteros y calcule las siguientes operaciones: <br><br> 1) Suma. <br><br> 2) Resta. <br><br> 3) Multiplicacion. <br><br> 4) Division. <br><br> 5) Modulo.</h4>
    <h4><?php echo "El valor de numero1= ".$numeros[0]."<br><br> El valor de numero2= ".$numeros[1]."<br>" ?></h4>

    <?php
    $suma=$numeros[0]+$numeros[1];
    $Resta=$numeros[0]-$numeros[1];
    $Multiplicacion=$numeros[0]*$numeros[1];
    $Division=$numeros[0]/$numeros[1];
    $Modulo=$numeros[0]%$numeros[1];
    echo "La Suma es: $suma <br><br> La Resta es: $Resta <br><br> La Multiplicacion es: $Multiplicacion <br><br> La Division es: $Division <br><br> El Modulo es $Modulo";

     ?>
  </body>
</html>
