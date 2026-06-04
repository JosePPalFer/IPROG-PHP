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
'G11' => 'Evento: Gamepolis, Aforo: 50, lugar: Málaga'
];

echo "<b>1: Unión y listado</b><br><br>";
$AgendaTotal = array_merge($EventosAndalucia, $EventosNacionales);

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
}

echo "<br>";

echo "<b>2. Tratamiento de Cadenas y Cálculo</b><br><br>";
$sumaAforos = 0;
$contador = 0;
foreach ($AgendaTotal as $codigo => $valor) {
    if (stripos($valor, "Málaga") !==false OR stripos($valor, "Malaga") !==false) {
        $evento = explode(", ", $valor);
            $aforo = explode(": ", $evento[1]);
        
        $sumaAforos += $aforo[1];

        $contador++;
    }
}

$aforomedio = $sumaAforos / $contador;

echo "Aforo medio de los eventos de Málaga: " .$aforomedio;

echo "<br><br>";

echo "<b>3. Modificación del array</b><br><br>";
$AgendaTotal["P01"] = "Evento: Puro Latino, Aforo: 35, Provincia: Cadiz";

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
}

echo "<br>";

echo "<b>4. Eliminación con Condicionales</b><br><br>";
foreach ($AgendaTotal as $codigo => $valor) {
    $evento=explode(", ", $valor);
        $aforo=explode(": ", $evento[1]);
    if (stripos($valor, "Almeria") !==false OR $aforo[1] < 10) {
        unset ($AgendaTotal[$codigo]);
    }
}

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
}

echo "<br>";

echo "<b>5. Control de Estados / Umbrales</b><br><br>";
foreach ($AgendaTotal as $codigo => $valor) {
    $evento=explode(", ", $valor);
        $aforo=explode(": ", $evento[1]);
    if ($aforo[1] > 45) {
        $AgendaTotal[$codigo] = $valor. " [GRAN EVENTO]";
    } else if ($aforo[1] <= 45 AND $aforo[1] >= 10) {
        $AgendaTotal[$codigo] = $valor. " [AFORO MEDIO]";
    } else if ($aforo[1] < 10) {
        $AgendaTotal[$codigo] = $valor. " [AFORO REDUCIDO]";
    }
}

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
}

echo "<br>";

echo "<b>6. Ordenación</b><br><br>";
ksort($AgendaTotal);

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
}
?>