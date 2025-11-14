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
$pera = array("Nombre" => "Pera", "Kilos" => 4,"Precio" => 13, "Cantidad" => 8);
$man = array ("Nombre" => "Manzana", "Kilos" => 5,"Precio" => 10, "Cantidad" => 5);
$naran = array ("Nombre" => "Naranja", "Kilos" => 7,"Precio" => 12, "Cantidad" => 10);

foreach ($pera as $etiqueta => $valor) {
    echo "<br>" . $etiqueta . ": " . $valor . "<br>";
}

foreach ($man as $etiqueta => $valor) {
    echo "<br>" . $etiqueta . ": " . $valor;
}

foreach ($naran as $etiqueta => $valor) {
    echo "<br>" . $etiqueta . ": " . $valor;
}
?>
</body>
</html>