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

echo "<br><b>2.- Busca los precios de aquellos productos relacionados con “Monitor”(considera mayúsculas y minúsculas, y crea un array de precios de monitores, para calcular el precio medio de estos.</b><br><br>";
$precioMonitores = 0;
$contador = 0;
foreach ($TotalProductos as $codigo => $valor) {
    if (stripos($valor, "Monitor") !==false) {
        $producto = explode(trim(","), $valor);
            $precio = explode(": ", $producto[1]);
        if (isset($precio[1]) == true) {
        $precioMonitores += $precio[1];

        $contador++;
        }
    }
}

$precioMedio = $precioMonitores / $contador;

echo "Precio medio de los monitores: " .$precioMedio;

echo "<br><br><b>3.- Añade un nuevo producto</b><br><br>";
$TotalProductos["A01"] = "Nombre: Almohadilla Ratón, Precio: 15,Stock: 300";

foreach ($TotalProductos as $codigo => $valor) {
    echo "El producto " .$codigo. " es: " .$valor. "<br>";
}

echo "<br><b>4.- Elimina aquellos productos donde aparezca “iphone” y stock 0. (considera que puede aparecer stock:0 y Stock: 0)</b><br><br>";
foreach ($TotalProductos as $codigo => $valor) {
    $producto = explode(trim(","), $valor);
        $stock = explode(trim(":"), $producto[2]);
    if (stripos($valor, "iphone") !==false AND $stock[1] <= 0) {
        unset ($TotalProductos[$codigo]);
    }
}

foreach ($TotalProductos as $codigo => $valor) {
    echo "El producto " .$codigo. " es: " .$valor. "<br>";
}

echo "<br><b>5.- Introduce nueva información en tus productos. Añade las cadenas “Estado Crítico” o bien “Estado Bajo” en función de un umbral. Si el stock está por debajo de 10 “Estado Crítico”, si está entre 10 y 80, “Estado bajo”.</b><br><br>";
foreach ($TotalProductos as $codigo => $valor) {
    $producto = explode(trim(","), $valor);
        $stock = explode(trim(":"), $producto[2]);
    if ($stock[1] < 10) {
        $TotalProductos[$codigo] = $valor. " “Estado Crítico”";
    } else if ($stock[1] >= 10 AND $stock[1] <= 80) {
        $TotalProductos[$codigo] = $valor. " “Estado Bajo”";
    }
}

foreach ($TotalProductos as $codigo => $valor) {
    echo "El producto " .$codigo. " es: " .$valor. "<br>";
}
?>