<!DOCTYPE html>
<html>
<body>
<?php
// Ejercicio 1 con bucle
$notas = array(5,3,2,7,10,9,8,2,4);
$elementos = count($notas); // Cuenta los elementos del array notas
//while

// Inicialización de las variables.
$i = 0;
$aprobados3= 0;
$suspensos3= 0;
while($i < $elementos) { // Mientras i sea menor que el número de elementos del array
   if ($notas[$i] >= 5) { // La notas es mayor o igual a 5
      $aprobados= $aprobados3 + 1; // $aprobados++
   } else { // Si no se cumple la condición del if
      $suspensos= $suspensos3 + 1; // $suspensos++
   }
    $i++;
    echo "El número de aprobados es ".$aprobados;
    echo "<br><br>El número de suspensos es ".$suspensos;
}

//do while

// Inicialización de las variables.
$i = 0;
$aprobados= 0;
$suspensos= 0;
do{
  if ($notas[$i] >= 5) { // La notas es mayor o igual a 5
      $aprobados= $aprobados + 1; // $aprobados++
   } else { // Si no se cumple la condición del if
      $suspensos= $suspensos + 1; // $suspensos++
   }
   $i++;
}
while($i < $elementos);
?>
</body>
</html>