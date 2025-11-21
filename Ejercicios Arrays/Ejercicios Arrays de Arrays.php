<!DOCTYPE html>
<html>
<body>
<?php
// Si el precio es mayor a 100€, descuento de un 15% (85€)
// Si el color es "Negro", da igual el precio "20%" descuento
// Si el stock es inferior a 5, 5% descuento
// Si el stock es superior a 10 -> + 1% El precio
$zapatillas = [
    'Codigo' => '001',
    'Modelo' => 'Samba',
    'Nombre' => 'Adidas',
    'Precio' => 120,
    'Color' => 'Negro',
    'Stock' => 3,
];

foreach ($zapatillas as $etiqueta => $valor) {
    if ($etiqueta == "Precio" && $valor >= 100) {
        $zapatillas ['Precio'] = $zapatillas ['Precio']  * 0.85;
        echo "El precio de las zapatillas sera: " . $zapatillas['Precio'] . "<br>";
    }
    else if ($etiqueta == "Color" && ($valor) == ("Negro")) {
        $zapatillas ['Precio'] = $zapatillas ['Precio']  * 0.80;
        echo "El precio de las zapatillas sera: " . $zapatillas['Precio'] . "<br>";
    }
    else if ($etiqueta == "Stock" && ($valor) < 5) {
    $zapatillas ['Precio'] = $zapatillas ['Precio']  * 0.95;
    echo "El precio de las zapatillas sera: " . $zapatillas['Precio'] . "<br>";
    }
}

?>
</body>
</html>