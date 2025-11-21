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

echo "1.a) Combinar en un único arrays todos los productos, llámalo “productos”<br><br>";
$productos = array_merge($ofertas,$regulares);
print_r($productos);

echo "<br><br>1.b) Indica qué sucede con aquellos productos que tienen la misma clave con distinto valor.<br>";
echo "Si varios productos tienen la misma clave, el último sobreescibe al primero.<br><br>";

echo "1.c) Partiendo del array “productos”, añade en el mismo 2 o 3 productos nuevos.<br><br>";
$productos += ["006" => "Melocoton", "007" => "Sandia", "008" => "Melon"];
print_r($productos);

echo "<br><br>1.d) Utiliza la función array_diff para obtener todos los productos que no están en oferta.<br><br>";
$sin_oferta = array_diff($productos, $ofertas);
print_r($sin_oferta);


echo "<br><br><br>2. Ordenación de Datos de Empleados: Crear una función para ordenar un array asociativo de empleados:<br>";

echo "<br>1. Por su clave (ID de empleado) de forma ascendente, usando ksort.<br><br>";

function ordenar_etiqueta() {
    $empleados = [
 'E105' => 'Carlos Gutiérrez',
 'E101' => 'Ana López',
 'E103' => 'Benito Pérez',
 'E102' => 'Diana Castro',
];
ksort ($empleados);

foreach ($empleados as $etiqueta => $valor)
    {
    echo "Etiqueta=" . $etiqueta . ", Valor=" . $valor;
    echo "<br>";
    }
}
ordenar_etiqueta();

echo "<br>2. Por su valor (Nombre del empleado) de forma ascendente, usando asort.<br><br>";

function ordenar_valor() {
    $empleados = [
 'E105' => 'Carlos Gutiérrez',
 'E101' => 'Ana López',
 'E103' => 'Benito Pérez',
 'E102' => 'Diana Castro',
];
asort ($empleados);

foreach ($empleados as $etiqueta => $valor)
    {
    echo "Etiqueta=" . $etiqueta . ", Valor=" . $valor;
    echo "<br>";
    }
}
ordenar_valor();


echo "<br><br>3. Procesamiento y Cálculos de Notas. Unir arrays de notas de dos trimestres, mostrar las
notas por asignatura, y calcular la media de todas las notas.<br><br>";

// Notas del primer trimestre
$notas_t1 = [
 'Matemáticas' => 7.5,
 'Lengua' => 8.0,
 'Historia' => 6.0,
];

// Notas del segundo trimestre (sobrescribirá Matemáticas y añadirá Inglés)
$notas_t2 = [
 'Matemáticas' => 8.5, // Clave duplicada, ¿qué pasa aquí al unir?
 'Inglés' => 9.0,
];

$notas = array_merge($notas_t1, $notas_t2); 
ksort ($notas);

foreach ($notas as $etiqueta => $valor)
    {
    echo "Etiqueta=" . $etiqueta . ", Valor=" . $valor;
    echo "<br>";
    };
?>
</body>
</html>