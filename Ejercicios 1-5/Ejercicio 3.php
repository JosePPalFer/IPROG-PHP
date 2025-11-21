<!DOCTYPE html>
<html>
<body>
<?php
/*Tercer Ejercicio
Calcular media
*/
$notas = array(5,3,2,7,10,9,8,2,4);
$suma_notas = array_sum($notas);
$numero_notas = count($notas);
$media = $suma_notas / $numero_notas;
if($media < 5) {
    echo "Suspenso<br><br>";
} elseif($media = 5 && $media = 6) {
    echo "Aprobado<br><br>";
} elseif($media = 7 && $media = 8) {
    echo "Notable<br><br>";
} else{
    echo "Sobresaliente<br><br>";
}
//Otra manera con Switch case
$notas2 = array(5,3,2,7,10,9,8,2,4);
$suma_notas2 = array_sum($notas2);
$numero_notas2 = count($notas2);
$media2 = $suma_notas2 / $numero_notas2;
switch($media2) {
    case 5 && 6:
    echo "Aprobado";
    break;
  case 7 && 8:
    echo "Notable";
    break;
  case 9 && 10:
    echo "Sobresaliente";
    break;
  default:
    echo "Suspenso";
}
?>
</body>
</html>