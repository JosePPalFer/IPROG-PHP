<html>
<body>
<?php
//0.
$ProductosCatalogo = array ("P01", "Nombre" => "Monitor 20", "Precio" => 200, "Stock" => 200,
                            "P02", "Nombre" => "Monitor 26", "Precio" => 300, "Stock" => 100,
                            "P03", "Nombre" => "Monitor 14", "Precio", "Stock" => 0,
                            "P04", "Nombre" => "Ratón", "Precio" => 30, "Stock" => 220,
                            "P05", "Nombre" => "iphone 8", "Precio" => 300, "Stock" => 0);

$ProductosNovedad = array ("N10", "Nombre" => "Webcam 4K", "Precio" => 85, "Stock" => 50,
                            "N11", "Nombre" => "Monitor 20", "Precio" => 55, "Stock" => 150,
                            "N12", "Nombre" => "Disco SSD 1TB", "Precio" => 99, "Stock",
                            "N13", "Nombre" => "Iphone 17", "Precio" => 1599, "Stock" => 0);

//1.
$Productos = array_merge ($ProductosCatalogo, $ProductosNovedad);
?>
</body>
</html>