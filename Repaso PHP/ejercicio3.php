<!DOCTYPE html>
<html>
<body> 
<?php
    //Ejercicio 3
    // 1. Pide un número 3 y muestra los números pares desde el 2 a ese
    echo "<h1>Ejercicio 3.</h1><br>";


    $numero = $_GET['numero'];

    // 3. Imprime los números pares del 2 al X usando un bucle for.
    echo "3. Números pares del 2 al 100:<br><br>";
    for ($i = 2; $i <= $numero; $i += 2) {
        echo "$i <br>";
    }
    echo "<br>";
?>
</body>
</html>