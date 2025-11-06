<!DOCTYPE html>
<html>
<body>
<?php
//José Pablo Palomar Fernández
Echo "1.- Monedas de la suerte<br>";
$tiradas= 0;
$dobles = 0;
$seguidas = 0;

while ($dobles < 3) {
$m1 = rand(0, 1);
$m2 = rand(0, 1);
echo "Tirada ".($tiradas + 1).": ";
{
if ($m1 == 0 && $m2 == 0) {
    $dobles++;
    echo "¡Cara Doble!<br>";
    if($seguidas == 0){ //No habia sacado seguidas antes
        $seguidas = 1; //Ya se ha generado 2 caras
        
    }else{ //La vez anterior ya saqué dobles
        $dobles = 0; //Reseteo los dobles porque he sacado 2 seguidas
        $seguidas = 0; //Reseteo las seguidas
        echo "¡Dobles seguidas! Has perdido todos los dobles acumulados.<br>";
    }   
} else {
    $seguidas = 0; echo "<br>";
} 
$tiradas++;}
}

Echo "2.- Generador de usuario para la intranet del centro";
$nombre = "Pablo";
$apellido1 = "Perez";
$apellido2 = "Martin";
$dni = "63573513F";

?>
</body>
</html>