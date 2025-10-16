<!DOCTYPE html>
<html>
<body>
<?php
$alumno = array("José Pablo","Palomar","Fernández",27, 8.8); //Practica 1
echo "El alumno ".$alumno[0]," ", $alumno[1], " ha aprobado con " .$alumno[3]," años<br>";

$compra = array ("Melocotón","6","4"); //Práctica 2
echo "<br>El ".$compra[0], " esta a " .$compra[1], " € el Kg<br>";
echo "<br>La compra me ha salido a " .$compra[1] * 4, " €<br><br>";

// Comprueba antes de ejecutar.
$i = 1;
while ($i < 6) {
  echo $i;
  echo "<br>";
  $i++;
}

//Siempre se ejecuta al menos una vez el contenido del do.
$i = 1;
do {
  echo $i;
  echo "<br>";
  $i++;
} while ($i < 6);

// $i=$i+1; es lo mismo que $i++;
for ($i = 0; $i < 16; $i++) {
  echo "Estoy dentro de For. <br>";
  echo $i;
  echo "<br>";
}
// No es necesario incrementar la variable dentro, porque ya está dentro del $1++;
?>
</body>
</html>