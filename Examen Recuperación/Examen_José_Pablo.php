<?php
$EventosAndalucia = array("E01" => "Evento: Weekend Beach, Aforo: 40, Provincia: Málaga",
                        "E02" => "Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almeria",
                        "E03" => "Evento: Monkey Week, Aforo: 5, Provincia: Sevilla",
                        "E04" => "EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz",
                        "E05" => "evento: Granada Sound, Aforo: 20, Provincia: Granada");

$EventosNacionales = array("G10" => "DreamHack, Aforo: 60, Lugar: Valencia",
                    "G11" => "Evento: Gamepolis, Aforo: 50, lugar: Malaga");

// 1: Unión y listado
$AgendaTotal = array_merge($EventosAndalucia, $EventosNacionales);

echo $AgendaTotal;

// 2. Tratamiento de Cadenas y Cálculo
$AforoMalaga = explode("Málaga", "$AgendaTotal");

if (strpos("$AforoMalaga", "Aforo: "));


// 3. Modificación del array
$AgendaTotal <= array("P01" => "Evento: Puro Latino, Aforo: 35, Provincia: Cádiz");

echo $AgendaTotal;

// 4. Eliminación con Condicionales

?>