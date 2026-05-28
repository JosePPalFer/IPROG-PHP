<?php
$EventosAndalucia = [
'E01' => 'Evento: Weekend Beach, Aforo: 40, Provincia: Málaga',
'E02' => 'Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almeria',
'E03' => 'Evento: Monkey Week, Aforo: 5, Provincia: Sevilla',
'E04' => 'EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz',
'E05' => 'evento: Granada Sound, Aforo: 20, Provincia: Granada'
];

$EventosNacionales = [
'G10' => 'Evento: DreamHack, Aforo: 60, Lugar: Valencia',
'G11' => 'Evento: Gamepolis, Aforo: 50, lugar: Malaga'
];

function ordenar_andalucia() {
    $EventosAndalucia = [
'E01' => 'Evento: Weekend Beach, Aforo: 40, Provincia: Málaga',
'E02' => 'Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almeria',
'E03' => 'Evento: Monkey Week, Aforo: 5, Provincia: Sevilla',
'E04' => 'EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz',
'E05' => 'evento: Granada Sound, Aforo: 20, Provincia: Granada'
];

foreach ($EventosAndalucia as $etiqueta => $valor)
    {
    echo "" . $etiqueta . " => " . $valor;
    echo "<br>";
    }
}

ordenar_andalucia();

echo "<br>";

function ordenar_nacional() {
    $EventosNacionales = [
'G10' => 'Evento: DreamHack, Aforo: 60, Lugar: Valencia',
'G11' => 'Evento: Gamepolis, Aforo: 50, lugar: Malaga'
];

foreach ($EventosNacionales as $etiqueta => $valor)
    {
    echo "" . $etiqueta . " => " . $valor;
    echo "<br>";
    }
}

ordenar_nacional();

echo "<br>";

// 1: Unión y listado
$AgendaTotal = array_merge($EventosAndalucia, $EventosNacionales);

function ordenar_total() {
    $AgendaTotal = [
'E01' => 'Evento: Weekend Beach, Aforo: 40, Provincia: Málaga',
'E02' => 'Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almeria',
'E03' => 'Evento: Monkey Week, Aforo: 5, Provincia: Sevilla',
'E04' => 'EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz',
'E05' => 'evento: Granada Sound, Aforo: 20, Provincia: Granada',
'G10' => 'Evento: DreamHack, Aforo: 60, Lugar: Valencia',
'G11' => 'Evento: Gamepolis, Aforo: 50, lugar: Malaga'
];

foreach ($AgendaTotal as $etiqueta => $valor)
    {
    echo "" . $etiqueta . " => " . $valor;
    echo "<br>";
    }
}

ordenar_total();

echo "<br>";

// 2. Tratamiento de Cadenas y Cálculo
echo stripos("Evento: Weekend Beach, Aforo: 40, Provincia: Málaga","Aforo");

echo "<br>";

$str="Evento: Weekend Beach, Aforo: 40, Provincia: Málaga";
print_r(explode(",",$str));

echo "<br>";
echo "<br>";

// 3. Modificación del array
$AgendaTotal["P01"] = "Evento: Puro Latino, Aforo: 35, Provincia: Cadiz";

function ordenar_total3() {
    $AgendaTotal = [
'E01' => 'Evento: Weekend Beach, Aforo: 40, Provincia: Málaga',
'E02' => 'Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almeria',
'E03' => 'Evento: Monkey Week, Aforo: 5, Provincia: Sevilla',
'E04' => 'EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz',
'E05' => 'evento: Granada Sound, Aforo: 20, Provincia: Granada',
'G10' => 'Evento: DreamHack, Aforo: 60, Lugar: Valencia',
'G11' => 'Evento: Gamepolis, Aforo: 50, lugar: Malaga',
'P01' => 'Evento: Puro Latino, Aforo: 35, Provincia: Cadiz'
];

foreach ($AgendaTotal as $etiqueta => $valor)
    {
    echo "" . $etiqueta . " => " . $valor;
    echo "<br>";
    }
}

ordenar_total3();

echo "<br>";

// 4. Eliminación con Condicionales


// 5. Control de Estados / Umbrales


// 6. Ordenación
function ordenar_total6() {
    $AgendaTotal = [
'E01' => 'Evento: Weekend Beach, Aforo: 40, Provincia: Málaga',
'E02' => 'Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almeria',
'E03' => 'Evento: Monkey Week, Aforo: 5, Provincia: Sevilla',
'E04' => 'EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz',
'E05' => 'evento: Granada Sound, Aforo: 20, Provincia: Granada',
'G10' => 'Evento: DreamHack, Aforo: 60, Lugar: Valencia',
'G11' => 'Evento: Gamepolis, Aforo: 50, lugar: Malaga',
'P01' => 'Evento: Puro Latino, Aforo: 35, Provincia: Cadiz'
];

ksort($AgendaTotal);

foreach ($AgendaTotal as $etiqueta => $valor)
    {
    echo "" . $etiqueta . " => " . $valor;
    echo "<br>";
    }
}

ordenar_total6();
?>