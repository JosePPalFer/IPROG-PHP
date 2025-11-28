<!DOCTYPE html>
<html>
<body>
<?php
    //Ejercicio 1
    // 1. Pide un número y comprueba si es mayor de 10. Imprime un mensaje apropiado.
    echo "<h1>Ejercicio 1.</h1><br>";

    // Usamos $_GET['nombre_del_input'] para recuperar el valor.
    $numero = $_GET['numero'];

    // Asegurarse de que el valor sea un entero (opcional, pero buena práctica)
    $numero = intval($numero);
    if ($numero > 10) {
        echo "1. El número **$numero** es mayor de 10.\n";
    } else {
        echo "1. El número **$numero** no es mayor de 10.\n";
    }
?>
</body>
</html>