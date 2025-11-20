<?php

echo "<h1>Ejercicio 2.</h1><br>";


$precio = $_GET['precio'];
$descuento = $_GET['descuento']; // Para un 10%, sería 0.10; 

if ($precio >= 20) {
    $precio_final = $precio - ($precio * $descuento);
    echo "2. Precio original: **$precio**. Se aplicó 10% de descuento. Precio final: **$precio_final**.\n";
} else {
    $precio_final = $precio;
    echo "2. Precio original: **$precio**. No se aplicó descuento. Precio final: **$precio_final**.\n";
}
