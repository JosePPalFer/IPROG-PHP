<!DOCTYPE html>
<html>
<body>
<?php
$tablas = 10;
$numeros = 9;

for ($i = 0; $i <= $tablas; $i++) {
    echo "<br> Tabla del $i <br>";
    for ($j = 0; $j <= $numeros; $j++) {
        echo "$i x $j= "  . $i * $j . "<br>";
    }
}

//Cubos de los numeros del 1 al 10.
$numeros = 10;

for ($i = 1; $i <= $tablas; $i++) {
    echo "Cubo del $i :" . $i * $i * $i . "<br>";
}
 
?>
</body>
</html>