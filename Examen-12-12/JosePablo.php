<html>
<body>
<?php
echo "Ejercicio 1: Gestión de inventario y Etiquetas<br><br>";
//1. Datos iniciales
$productos_basicos = array(" cable hdmi ", " baterias AA ", " pendrive 128gb ");
$nombre_productos_extra = "  adaptador de red ";

print_r($productos_basicos);

//2. Preparación de Etiquetas
$etiqueta_final=strtoupper(trim("  adaptador de red "));

echo "<br><br>" . $etiqueta_final . "<br><br>";

//3. Localización de Producto
array_search(" baterias AA ", $productos_basicos);
unset($productos_basicos["1"]);
print_r($productos_basicos);

echo "<br><br>Ejercicio 2: Procesamiento de Órdenes de Pedido<br><br>";
//1. Inspección y Conteo


//2. Descuento
$unidades_compradas = 180;
$precio_unitario = 8.50;

if($unidades_compradas >= 150) {
    $precio_unitario * 0.80;
    print_r($precio_unitario);
} elseif($unidades_compradas >= 50 && $unidades_compradas < 150) {
    $precio_unitario * 0.90;
    print_r($precio_unitario);
} else {
    print_r($precio_unitario);
}

//3. Revisión de Stock Crítico
$stock_inicial = 60;

echo "<br><br>Ejercicio 3: Clasificación Final y Validaciones<br><br>";
//1. Clasificación de Resultado
$nota = "A";

if ($nota = "A") {
    echo "Resultado Aprobado - Prioridad Alta<br>";
    echo "Resultado Pendiente de Revisión<br><br>";
} elseif ($nota = "B") {
    echo "Resultado Aprobado - Prioridad Media<br>";
    echo "Resultado Pendiente de Revisión<br><br>";
}

//2. Análisis de Código
$codigo_seguridad = "PROD-XS-45";
?>
</body>
</html>