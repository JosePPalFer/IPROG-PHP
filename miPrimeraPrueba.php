<!DOCTYPE html>
<html>
<body>
 
<h1>Mi primera WEB</h1>

<?php // Inicio de código PHP

// echo sirve para mostrar información en pantalla.
echo "My first PHP script!"; // Las cadenas de texto van estre comillas.
//todas las sentencias de PHP deben terminar en punto y coma.

$edad = 25;
$nombre = "Jose Pablo";

// Fin de código PHP
?>

echo
    >?
    <h1>
    <?php $nombre
    ?> </h1>
    <?php ?>;

<?php
$entero = 5;
$decimal = 10.5;

$x = true;
echo "El tipo de dato de la variable \$x es:"
.var_dump($x);
$tipoDato = "var_dump($x)";

echo "<br>El tipo de dato de la variable \$x es: $tipoDato";

echo "<br>Este es un "; //Imprime un salto de línea
echo "<br>Aquí acaba el ejemplo"; //Imprime un salto de línea en HTML

$cars = array("Volvo","BMW","Toyota");//Array guarda multiples variables en una variable
var_dump($cars);
echo "Mi coche es un:". $cars[2];
?>
</body>
</html>