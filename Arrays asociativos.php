<!DOCTYPE html>
<html>
<body>
<?php
//1. Practica: Crear array que contemple Nombre, Apellido, Modulos con sus notas.
// Calcular la media de las notas.
$alumno1 = array("Nombre" => "Pedro",
    "Apellido" => "Perez",
    "ASGBD" => 6,
    "PHP" => 2,
    "IMWEB" => 7,
    "SRI" => 8);

$alumno2 = array("Nombre" => "Miguel",
    "Apellido" => "Campos",
    "ASGBD" => 5,
    "PHP" => 4,
    "IMWEB" => 6,
    "SRI" => 3);

$notasalumno1 = $alumno1["ASGBD"] + $alumno1["PHP"] + $alumno1["IMWEB"] + $alumno1["SRI"];

$notasalumno2 = $alumno2["ASGBD"] + $alumno2["PHP"] + $alumno2["IMWEB"] + $alumno2["SRI"];

echo "Notas de " . $alumno1["Nombre"] . " " . $alumno1["Apellido"] . ": " . $notasalumno1 / 4 . "<br>";

echo "Notas de " . $alumno2["Nombre"] . " " . $alumno2["Apellido"] . ": " . $notasalumno2 / 4 . "<br><br>";

foreach ($alumno1 as $etiqueta => $valor) {
    if($etiqueta == "ASGBD" or $etiqueta == "PHP"){
        echo "Mi nota con Ángela en: " . $etiqueta . " es: " .$valor . "<br>";
    }
}

foreach ($alumno1 as $etiqueta => $valor) {
    if (is_numeric($valor) && $valor >= 5) {
        echo "<br>Mi nota en " . $etiqueta . " esta aprobada.<br>";
    }
}

//Ejemplo con zapatillas
$zapatos = array("Marca" => "Nike",
    "Color" => "Azul",
    "Precio" => 48,
    "Stock" => 9);

foreach ($zapatos as $x => $y) {
    echo "<br>" . $x . ": " . $y;
}

//Crear un array de producto, que tenga nombre, caracteristicas, precio, stock, etc, con diferentes campos.
$pera = array("Nombre" => "Pera", "PrecioKg" => 5, "Cantidad" => 8);

$man = array ("Nombre" => "Manzana", "PrecioKg" => 3, "Cantidad" => 14);
$man ["color"] = "Rojo";

$naran = array ("Nombre" => "Naranja", "PrecioKg" => 4, "Cantidad" => 10);
$naran ["color"] = "Naranja";

$plat = array ("Nombre" => "Platano", "PrecioKg" => 6, "Cantidad" => 7);
$plat ["color"] = "Amarillo";


foreach ($man as $etiqueta => $valor) {
    echo "<br>" . $etiqueta . ": " . $valor;
}

foreach ($naran as $etiqueta => $valor) {
    echo "<br>" . $etiqueta . ": " . $valor;
}

foreach ($plat as $etiqueta => $valor) {
    echo "<br>" . $etiqueta . ": " . $valor;
}

echo "<br><br>Vamos a añadir elementos del array<br>";
//Añadir al array
$pera += ["Color" => "Verde", "Caducidad" => "01/01/26"];

unset ($pera["Caducidad"]); //Eliminar elemento del array, borrando memoria

foreach ($pera as $etiqueta => $valor) { //Actualizar. Precio por precio*1.1;
    if ($etiqueta == "PrecioKg") {
        $pera [$etiqueta] = $valor * 1.1; //$pera["precioKg"] = 2.3*1.1;
    }
 
    echo "<br>" . $etiqueta . ": " . $pera[$etiqueta] . "<br>";
}

//Prueba con array_diff
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);
var_dump($newarray); //Borra Mustang y 1964, solo borra el valor, no la etiqueta

//asort ordena una array asociativa de forma ascendente, de acuerdo a el valor

//asort ordena una array asociativa de forma ascendente, de acuerdo a la etiqueta

//arrays multidimensionales
$coches = array (
    array ("marca" => "volvo", "stock" => 22, "ventas" => 18),
    array ("marca" => "BMW", "stock" => 15, "ventas" => 13),
    array ("marca" => "Saab", "stock" => 5, "ventas" => 2),
    array ("marca" => "Land Rover", "stock" => 17, "ventas" => 15)
);

// otras arrays interesantes serian array_keys, array_rand, array_replace, array_sum, in_array, array_search. array_merge, array_fill, array_pop

//Funciones
function imprimirArrayFruta($fruta) {
foreach ($fruta as $etiqueta => $valor) { //Actualizar. Precio por precio*1.1;
    if ($etiqueta == "PrecioKg") {
        $fruta [$etiqueta] = $valor * 1.1; //$pera["precioKg"] = 2.3*1.1;
    }
 
    echo "<br>" . $etiqueta . ": " . $fruta[$etiqueta] . "<br>";
}
}

imprimirArrayFruta($pera);
imprimirArrayFruta($man);

?>
</body>
</html>