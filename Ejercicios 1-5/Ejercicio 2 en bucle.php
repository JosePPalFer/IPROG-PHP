<!DOCTYPE html>
<html>
<body>
<?php
// Ejercicio 2 con bucle
$precioKg = array (10,11.3,1.28,4.7,2);
//while

// Inicialización de las variables.
$f = 0;
while($f < count($precioKg)) {
   if($precioKg[$f] >= 4) {
      $precioKg[$f]= $precioKg[$f] - ($precioKg[$f] * 0.1);
   } else{
      $precioKg[$f]= $precioKg[$f] + ($precioKg[$f] * 0.05);
   }
   $f++;
   echo "El precio actualizado es ".$precioKg[$f]."<br>";
}

//do while

// Inicialización de las variables.
$f = 0;
do{
  if($precioKg[$f] >= 4) {
      $precioKg[$f]= $precioKg[$f] - ($precioKg[$f] * 0.1);
   } else{
      $precioKg[$f]= $precioKg[$f] + ($precioKg[$f] * 0.05);
   }
   $f++;
   echo "El precio actualizado es ".$precioKg[$f]."<br>";
}
while($f < count($precioKg));

//for while

for($f = 0; $f < count($precioKg); $f++){
  if($precioKg[$f] >= 4) {
      $precioKg[$f]= $precioKg[$f] - ($precioKg[$f] * 0.1);
   } else{
      $precioKg[$f]= $precioKg[$f] + ($precioKg[$f] * 0.05);
   } 
   echo "El precio actualizado es ".$precioKg[$f]."<br>";  
}
?>
</body>
</html>