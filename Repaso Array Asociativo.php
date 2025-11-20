<!DOCTYPE html>
<html>
<body>
<?php
// Array de productos en oferta
$ofertas = [
 '001' => 'Manzana Roja',
 '003' => 'Pera Verde',
 '005' => 'Naranja',
];
// Array de productos regulares
$regulares = [
 '002' => 'Plátano',
 '003' => 'Pera Verde',
 '004' => 'Uva Negra',
];

// 1.a) Combinar en un único arrays todos los productos, llámalo “productos”
// 1.b) Indica qué sucede con aquellos productos que tienen la misma clave con distinto valor.
$productos = array_merge($ofertas,$regulares);
print_r($productos); // Si varios productos tienen la misma clave, el último sobreescibe al primero.

// 1.c) Partiendo del array “productos”, añade en el mismo 2 o 3 productos nuevos.


// 1.d) Utiliza la función array_diff para obtener todos los productos que no están en oferta.


?>
</body>
</html>