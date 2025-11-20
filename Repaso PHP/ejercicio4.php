<?php
// 4. Inicializa un contador en 0. Usa un bucle while para incrementar el contador de X en X hasta que alcance o supere el número indicado
//. Imprime los numeros.
echo "<h1>Ejercicio 4.</h1><br>";


$numero = $_GET['numero'];
$cnt = $_GET['cnt'];

$contador = 0;
while ($contador <= $numero) {
    echo "$contador <br> ";
    $contador += $cnt;
}
echo "4. El contador final es: **$contador**.<br>";
