<!DOCTYPE html>
<html>
<body>
<?php
$matriz = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

foreach ($matriz as $fila) {
    foreach ($fila as $numero) {
        $es_par = ($numero % 2 === 0);
        $es_mult_3 = ($numero % 3 === 0);
        $formato = $numero;

        if ($es_par && $es_mult_3) {
            $formato = "[($numero)]"; // Cumple ambas
        } elseif ($es_par) {
            $formato = "($numero)"; // Múltiplo de 2 (Par)
        } elseif ($es_mult_3) {
            $formato = "[$numero]"; // Múltiplo de 3
        }

        echo "$formato\t";
    }
    echo "\n";
    }
?>
</body>
</html>