<!DOCTYPE html>
<html>
<body>
<?php
//Primer Ejercicio
$notas = array(5,3,2,7,10,9,8,2,4);
$aprobados = 0;
$suspensos = 0;
 if ($notas[0] >= 5) {
    $aprobados + 1;
 } elseif ($notas[0] < 5) {
    $suspensos + 1;
 } elseif ($notas[1] >= 5) {
    $suspensos + 1;
 } elseif ($notas[1] < 5) {
    $suspensos + 1;
 } elseif ($notas[2] >= 5) {
    $suspensos + 1;
 } elseif ($notas[2] < 5) {
    $suspensos + 1;
 } elseif ($notas[3] >= 5) {
    $suspensos + 1;
 } elseif ($notas[3] < 5) {
    $suspensos + 1;
 } elseif ($notas[4] >= 5) {
    $suspensos + 1;
 } elseif ($notas[4] < 5) {
    $suspensos + 1;
 } elseif ($notas[5] >= 5) {
    $suspensos + 1;
 } elseif ($notas[5] < 5) {
    $suspensos + 1;
 } elseif ($notas[6] >= 5) {
    $suspensos + 1;
 } elseif ($notas[6] < 5) {
    $suspensos + 1;
 } elseif ($notas[7] >= 5) {
    $suspensos + 1;
 } elseif ($notas[7] < 5) {
    $suspensos + 1;
 } elseif ($notas[8] >= 5) {
    $suspensos + 1;
 } elseif ($notas[8] < 5) {
    $suspensos + 1;
 }

echo "El número de aprobados es ".$aprobados;
echo "<br><br>El número de suspensos es ".$suspensos;

//Otra manera con Switch case
$aprobados2 = 0;
$suspensos2 = 0;
switch ($notas) {
    case ($notas[0] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[0] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[1] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[1] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[2] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[2] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[3] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[3] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[4] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[4] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[5] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[5] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[6] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[6] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[7] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[7] < 5):
    $suspensos2 + 1;
    break;
    case ($notas[8] >= 5):
    $aprobados2 + 1;
    break;
    case ($notas[8] < 5):
    $suspensos2 + 1;
    break;
  default:
    $suspensos2 + 1;
}
echo "<br><br>El número de aprobados es ".$aprobados2;
echo "<br><br>El número de suspensos es ".$suspensos2;
?>
</body>
</html>