<!DOCTYPE html>
<html>
<body>
<?php
echo strpos("Hello world!", "world");

$x = "Hello World!";
echo strtoupper($x);

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

$var = 23;
echo "El valor de mi variable es: ".$var;
$x = "Hello";
$y = "World";
$z = $x . $y .$var;
echo $z;

$nombre = "Angela Ríder Jimenez";
$x = "Hello World!";
$p_nombre = strpos("$nombre", "Ríder");

//echo substr($nombre, $p_nombre, 100);

$r = str_word_count("Angela Ríder Jimenez",2);

var_dump($r);
echo substr($nombre, $r[2], 100);
?>
</body>
</html>