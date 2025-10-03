<!DOCTYPE html>
<html>
<body>
<?php
$alumno = array("José Pablo","Palomar","Fernández",27, 8.8); //Practica 1
echo "El alumno ".$alumno[0]," ", $alumno[1], " ha aprobado con " .$alumno[3]," años<br>";

$compra = array ("Melocotón","6","4"); //Práctica 2
echo "<br>El ".$compra[0], " esta a " .$compra[1], " € el Kg<br>";
echo "<br>La compra me ha salido a " .$compra[1] * 4, " €<br><br>";

//Primer Ejercicio
$notas = array(5,3,2,7,10,9,8,2,4);
 if ($notas >= 5) {
    echo $aprobados;
 } else {
    echo $suspendidos;
 }

//Segundo Ejercicio
$precioKg;

//Tercer Ejercicio
$suma_notas = array_sum($notas);
$numero_notas = count($notas);
$media = $suma_notas / $numero_notas;
if ($media < 5) {
    echo "Suspenso";
} elseif ($media = 5 && $media = 6) {
    echo "Aprobado";
} elseif ($media = 7 && $media = 8) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}
?>
</body>
</html>