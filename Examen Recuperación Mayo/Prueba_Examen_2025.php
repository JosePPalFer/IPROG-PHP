<?php
$ProductosCatalogo = [
    'P01' => 'Nombre: monitor 20, Precio: 200, Stock: 200',
    'P02' => 'Nombre: MONITOR 26, PRecio: 300, Stock: 100',
    'P03' => 'Nombre: Monitor 14, PreciO:, Stock: 0',
    'P04' => 'Nombre: Ratón, Precio: 30, Stock: 220',
    'P05' => 'Nombre: iphone 8, Precio: 300, Stock: 0'
];

$ProductosNovedad = [
    'N10' => 'Nombre: Webcam 4K, PreCIo: 85, Stock: 50',
    'N11' => 'Nombre: Monitor 20, PRECIO: 55, Stock: 150',
    'N12' => 'Nombre: Disco SSD 1TB, Precio: 99, Stock: 75',
    'N13' => 'Nombre: Iphone 17, Precio: 1599, Stock: 0'
];

echo "<b>1.- Une todos los productos en un único array y muéstralo por pantalla:</b><br><br>";
$TotalProductos = array_merge($ProductosCatalogo, $ProductosNovedad);

echo "Total de productos: <b>" .count($TotalProductos). "</b><br>";

foreach ($TotalProductos as $codigo => $valor) {
    echo "El producto " .$codigo. " es: " .$valor. "<br>";
}

echo "<b>2.- Busca los precios de aquellos productos relacionados con “Monitor”(considera mayúsculas y minúsculas, y crea un array de precios de monitores, para calcular el precio medio de estos.</b><br><br>";
foreach ($TotalProductos as $codigo => $valor) {}
?>