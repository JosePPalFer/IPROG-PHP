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
      $aprobados3= $aprobados3 + 1; // $aprobados++
   } else { // Si no se cumple la condición del if
      $suspensos3= $suspensos3 + 1; // $suspensos++
   }
    $i++;
}
echo "El número de aprobados es ".$aprobados3;
echo "<br><br>El número de suspensos es ".$suspensos3;

//do while

// Inicialización de las variables.
$i = 0;
$aprobado= 0;
$suspenso= 0;
do{
  if ($notas[$i] >= 5) { // La notas es mayor o igual a 5
      $aprobado= $aprobado + 1; // $aprobados++
   } else { // Si no se cumple la condición del if
      $suspenso= $suspenso + 1; // $suspensos++
   }
   $i++;
}
while($i < count($notas));
echo "<br><br>El número de aprobados es ".$aprobado;
echo "<br><br>El número de suspensos es ".$suspenso;

//for while

// Inicialización de las variables.
 $aprobado= 0;
 $suspenso= 0;
for($i = 0; $i < count($notas); $i++){
  if ($notas[$i] >= 5) { // La notas es mayor o igual a 5
      $aprobado= $aprobado + 1; // $aprobados++
   } else { // Si no se cumple la condición del if
      $suspenso= $suspenso + 1; // $suspensos++
   }
}
echo "<br><br>El número de aprobados es ".$aprobado;
echo "<br><br>El número de suspensos es ".$suspenso;
?>
</body>
</html>