<!DOCTYPE html>
<html>
<body>
<?php
// Ejercicio 3 con bucle
$notas = array(5,3,2,7,10,9,8,2,4);
//while

// Inicialización de las variables.
$suma = 0;
$m = 0;
while($m < count($notas)) {
    $suma += $notas[$m];
    $m++;
}
$media = $suma / count($notas);

echo "Tu media es: ".$media."<br>";

if($media < 5) {
    echo "Suspenso<br><br>";
} elseif($media = 5 && $media = 6) {
    echo "Aprobado<br><br>";
} elseif($media = 7 && $media = 8) {
    echo "Notable<br><br>";
} else{
    echo "Sobresaliente<br><br>";
}
//do while

$suma = 0;
$m = 0;
do{
    $suma += $notas[$m];
    $m++;
}
while($m < count($notas));

$media = $suma / count($notas);

echo "Tu media es: ".$media."<br>";

if($media < 5) {
    echo "Suspenso<br><br>";
} elseif($media = 5 && $media = 6) {
    echo "Aprobado<br><br>";
} elseif($media = 7 && $media = 8) {
    echo "Notable<br><br>";
} else{
    echo "Sobresaliente<br><br>";
}
// Inicialización de las variables.


//for while

$suma = 0;
for($m = 0; $m < count($notas); $m++) {
    $suma += $notas[$m];
}

$media = $suma / count($notas);

echo "Tu media es: ".$media."<br>";

if($media < 5) {
    echo "Suspenso<br><br>";
} elseif($media = 5 && $media = 6) {
    echo "Aprobado<br><br>";
} elseif($media = 7 && $media = 8) {
    echo "Notable<br><br>";
} else{
    echo "Sobresaliente<br><br>";
}
?>
</body>
</html>