<!DOCTYPE html>
<html>
<body>
<?php
$tablas = 10;
$numeros = 9;

for ($i = 0; $i <= $tablas; $i++) {
    echo "<br> Tabla del $i <br>";
    for ($j = 0; $j <= $numeros; $j++) {
        echo "$i x $j= "  . $i * $j . "<br>";
    }
}

//Cubos de los numeros del 1 al 10.
$numeros = 10;

for ($i = 1; $i <= $tablas; $i++) {
    echo "Cubo del $i :" . $i * $i * $i . "<br>";
}

echo "<br><br>3.- Array asociativos para deportes:<br>";
/* Array que almacene informacion sobre varios deportes:

$deportes = array(

    "Nombre" => "nombreDeporte",
    "Horario" => "jueves y viernes",
    "Precio" => "",
    "Edad" => 0,
    "Equipacion" => "Si",
    "Frecuencia" => "Semanal")

    - Baloncesto:
        - Horario: jueves y viernes.
        - Precio aficiliación: 15€/mes.
        - Edad media jugadores: Se calcula a partir de otro array.
        - Equipación oficial: Si/No.
        - Frecuencia partidos competeción: Semanal.

    - Padel:
        - Horario: lunes y miercoles.
        - Precio aficiliacion: 30€/mes.
        - Edad media jugadores: Se calcula a partir de otro array.
        - Equipación oficial: Si/No.
        - Frecuencia partidos competeción: Mensual.

    - Futbol:
        - Horario: Sabados.
        - Precio aficiliacion: 5€/mes.
        - Edad media jugadores: Se calcula a partir de otro array.
        - Equipación oficial: Si/No.
        - Frecuencia partidos competeción: Semanal.
*/
// 1.- Calculo de la edad media de los deportistas.

// Media Baloncesto
foreach ($PersonasB as $nombre => $edad) {
    $mediaB = $mediaB + $edad;
}
$mediaB = $mediaB / count($PersonasB);

// Media Padel
foreach ($PersonasP as $nombre => $edad) {
    $mediaP = $mediaP + $edad;
}
$mediaP = $mediaP / count($PersonasP);

// Media Futbol
foreach ($PersonasF as $nombre => $edad) {
    $mediaF = $mediaF + $edad;
}
$mediaF = $mediaF / count($PersonasF);

//b.- Inserta la edad en el array correspondiente

//c.- Inserta un nuevo campo llamado "federado", donde se asocie el nombre del equipo federado

//d.- 
?>
</body>
</html>