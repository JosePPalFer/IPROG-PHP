<!DOCTYPE html>
<html>
<body>
<?php
//José Pablo Palomar Fernández
Echo "1.- Monedas de la suerte<br><br>";
$tiradas= 0;
$dobles = 0;
$seguidas = 0;

while ($dobles < 3) {
$m1 = rand(0, 1);
$m2 = rand(0, 1);
echo "Tirada ".($tiradas + 1).": ";
{
if ($m1 == 0 && $m2 == 0) {
    $dobles++;
    echo "¡Cara Doble!<br>";
    if($seguidas == 0){ //No habia sacado seguidas antes
        $seguidas = 1; //Ya se ha generado 2 caras
        
    }else{ //La vez anterior ya saqué dobles
        $dobles = 0; //Reseteo los dobles porque he sacado 2 seguidas
        $seguidas = 0; //Reseteo las seguidas
        echo "¡Dobles seguidas! Has perdido todos los dobles acumulados.<br>";
    }   
} else {
    $seguidas = 0; echo "<br>";
} 
$tiradas++;}
}

Echo "<br><br>2.- Generador de usuario para la intranet del centro";
$nombre = "Pablo";
$apellidos = "Perez Martin";
$dni = "63573513F";
$fecha_nacimiento = "25/5/2003";
$edad = 22;

//Normalización previa ** TRIM

$nombre = trim($nombre);
$apellidos = trim($apellidos);

//1.- Paso a minúsculas
$nombre = strtolower($nombre);

$apellidos = str_replace("De la ", "dela", $apellidos);
$apellidos = str_replace("Del ", "del", $apellidos);
$apellidos = str_replace("De ", "de", $apellidos);
$apellidos = str_replace("-", "", $apellidos);
$apellidos = str_replace("Los ", "los", $apellidos);

$apellidos = strtolower($apellidos);
echo "<br><br>1.- Paso a minúsculas<br><br>";
echo "nombre: " .$nombre;
echo "<br>apellidos: " .$apellidos;

//2.- Apellidos *Revisar apellidos compuestos
$apel = explode(" ", $apellidos);
$apellido1 = $apel[0];
$numApellidos = count($apel);

switch ($numApellidos) {
    case 1: //Solo hay un apellido.
        $apellido2 = "xxx";
        break;
    case 2: //si hay 2, supongo que son 2 apellidos
        $apellido2 = $apel[1];
        break;
    default:
        $apellido2 = $apel[$numApellidos - 1];
}

echo "<br><br><br>2.- Separo apellidos<br><br>";
echo "Apellido 1: " .$apellido1;
echo "<br>Apellido 2: " .$apellido2;

//3.- Sustituir tildes y ñ
//nombre
$nombre = str_replace("á", "a", $nombre);
$nombre = str_replace("é", "e", $nombre);
$nombre = str_replace("í", "i", $nombre);
$nombre = str_replace("ó", "o", $nombre);
$nombre = str_replace("ú", "u", $nombre);
$nombre = str_replace("ñ", "n", $nombre);
//Apellido1
$apellido1 = str_replace("á", "a", $apellido1);
$apellido1 = str_replace("é", "e", $apellido1);
$apellido1 = str_replace("í", "i", $apellido1);
$apellido1 = str_replace("ó", "o", $apellido1);
$apellido1 = str_replace("ú", "u", $apellido1);
$apellido1 = str_replace("ñ", "n", $apellido1);
//Apellido2
$apellido2 = str_replace("á", "a", $apellido2);
$apellido2 = str_replace("é", "e", $apellido2);
$apellido2 = str_replace("í", "i", $apellido2);
$apellido2 = str_replace("ó", "o", $apellido2);
$apellido2 = str_replace("ú", "u", $apellido2);
$apellido2 = str_replace("ñ", "n", $apellido2);

echo "<br><br><br>3.- Sustituir tildes y ñ<br><br>";
echo "nombre: " .$nombre;
echo "<br>apellido1: " .$apellido1;
echo "<br>apellido2: " .$apellido2;

//4.- Fechas
$f=explode("/", $fecha_nacimiento);
$dia=$f[0];
if(strlen($dia) == 1) { //Si solo tiene una cifra
    $dia = "0" .$dia;
}
$mes=$f[1];
if(strlen($mes) == 1) { //Si solo tiene una cifra
    $dia = "0" .$mes;
}
$anio=$f[2];
echo "<br><br><br>4.- Fechas<br><br>";
echo "dia: " .$dia;
echo "<br>mes: " .$mes;
echo "<br>año: " .$anio;

// 5.- DNI: Tenga o no letra, quiero pos 5, 6 y 7
$dni = substr($dni, 5, 3);
echo "<br><br><br>5.- DNI<br><br>";
echo "DNI: " .$dni;

// 6.- Genero usuario
$usuario = substr($nombre, 0, 1);
$usuario = $usuario . substr($apellido1, 0, 3);
$usuario = $usuario . substr($apellido2, 0, 3);
echo "<br><br><br>6.- Genero usuario<br><br>";
echo "usuario: " .$usuario;

// 7.- Si es menor o mayor, para coger fecha o dni
// Opción 1, resto el año actual al año de nacimiento
if ((2025-$anio) >=18 ){
    $usuario = $usuario . $dni;
} else {
    $usuario = $usuario . $dia . $mes;
}
echo "<br><br><br>7.- Coger fecha o dni<br><br>";
echo "usuario con DNI/Fecha: " .$usuario;

// 8.- Pegar extensión de correo
echo "<br><br><br>8.- Pegar extensión de correo<br><br>";
$usuario = $usuario. "@luisvelez.org";

echo "Final: " .$usuario

?>
</body>
</html>