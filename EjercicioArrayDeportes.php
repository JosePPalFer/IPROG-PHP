<!DOCTYPE html>
<html>
<body>
<?php
echo "3.- Array asociativos para deportes:<br><br>";
/* Array que almacene informacion sobre varios deportes:

$deportes = array(

    "Nombre" => "nombreDeporte",
    "Horario" => "jueves y viernes",
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
echo "1.- Calculo de la edad media de los deportistas.<br>";

$Baloncesto = array(
"Horario" => "jueves y viernes",
"Precio" => 15,
"Edad" => 0,
"Equipación" => "Si",
"Frecuencia" => "Semanal"
);
$Padel = array(
"Horario" => "lunes y miércoles",
"Precio" => 35,
"Edad" => 0,
"Equipación" => "No",
"Frecuencia" => "Mensual"
);
$Futbol = array(
"Horario" => "sábados",
"Precio" => 5,
"Edad" => 0,
"Equipación" => "Si",
"Frecuencia" => "Semanal"
);

$PersonasB = array(
"Peope" => 40,
"Mario" => 35,
"Ruben" => 18,
"Cayetano" => 22,
"Lucas" => 30
);
$PersonasP = array(
"Sergio" => 35,
"Paco" => 27,
"Carlos" => 23,
"Antonio" => 17,
"Borja" => 32
);
$PersonasF = array(
"Ana" => 40,
"Maria" => 35,
"Sofia" => 18,
"Isabel" => 22,
"Lucia" => 30
);

//Media Baloncesto
$mediaB = 0;
foreach ($PersonasB as $nombre => $edad) {
$mediaB = $mediaB + $edad;
}
$mediaB = $mediaB / count($PersonasB);

// Media Padel
$mediaP = 0;
foreach ($PersonasP as $nombre => $edad) {
$mediaP = $mediaP + $edad;
}
$mediaP = $mediaP / count($PersonasP);

//Media Futbol
$mediaF = 0;
foreach ($PersonasF as $nombre => $edad) {
$mediaF = $mediaF + $edad;
}
$mediaF = $mediaF / count($PersonasF);

echo "La media de edad en el Baloncesto es: " . $mediaB . "<br>";
echo "La media de edad en el Padel es: " . $mediaP . "<br>";
echo "La media de edad en el Futbol es: " . $mediaF . "<br>";

echo "<br>b.- Inserta la edad en el array correspondiente";
$Baloncesto ["Edad"] = $mediaB;

echo "<br>Edad Baloncesto: " . $Baloncesto["Edad"];

$Padel ["Edad"] = $mediaP;

echo "<br>Edad Padel: " . $Padel["Edad"];

$Futbol ["Edad"] = $mediaF;

echo "<br>Edad Futbol: " . $Futbol["Edad"] . "<br><br>";

echo "<br>c.- Inserta un nuevo campo llamado federado, donde se asocie el nombre del equipo federado<br>";
$Baloncesto["federado"] = "Sevilla";

echo "Baloncesto: "; print_r($Baloncesto); echo "<br><br>";

$Padel["federado"] = "Madrid";

echo "Padel: "; print_r($Padel); echo "<br><br>";

$Futbol["federado"] = "Barcelona";    

echo "Futbol: "; print_r($Futbol); echo "<br>";

echo "<br><br>d.- Elimina la información referente a la frecuencia.<br>";
unset($Baloncesto["Frecuencia"]);

echo "Baloncesto: "; print_r($Baloncesto); echo "<br><br>";

unset($Padel["Frecuencia"]);

echo "Padel: "; print_r($Padel); echo "<br><br>";

unset($Futbol["Frecuencia"]); 

echo "Futbol: "; print_r($Futbol);

?>
</body>
</html>