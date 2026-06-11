<?php
$EventosAndalucia = [
    "E01" => "Evento: Weekend Beach, Aforo: 40, Provincia: Málaga",
    "E02" => "Eve nto: Dreambeach, Aforo: 25, ProvinciA: Almería",
    "E03" => "Evento: Monkey Week, Aforo: 5, Provincia: Sevilla",
    "E04" => "EventO: Cabo de Plata, Aforo: 30, Provincia: Cádiz",
    "E05" => "evento: Granada Sound, Aforo: 20, Provincia: Granada"
];

$EventosNacionales = [
    "G10" => "Evento: DreamHack, Aforo: 60, Lugar: Valencia",
    "G11" => "Evento: Gamepolis, Aforo: 50, lugar: Málaga"
];

echo "<b>1. Unión y Listado</b><br><br>";
$AgendaTotal = array_merge($EventosAndalucia, $EventosNacionales);

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
};

echo "<br><b>2. Tratamiento de Cadenas y Cálculo</b><br><br>";
$sumaAforo = 0;
$contador = 0;

foreach ($AgendaTotal as $codigo => $valor) {
    if (stripos($valor, "Málaga") !== false) {
        $malaga = explode(trim(","), $valor);
            $aforo = explode(trim(":"), $malaga[1]);
        
        $sumaAforo += $aforo[1];

        $contador++;
    }
};

$mediaAforo = $sumaAforo / $contador;

echo "El aforo medio de los eventos de Málaga es: " .$mediaAforo. "<br>";

echo "<br><b>3. Tratamiento de Cadenas y Cálculo</b><br><br>";
$AgendaTotal ["P01"] = "Evento: Puro Latino, Aforo: 35, Provincia: Cádiz";

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
};

echo "<br><b>4. Eliminación con Condicionales</b><br><br>";
foreach ($AgendaTotal as $codigo => $valor) {
    $malaga = explode(trim(","), $valor);
        $aforo = explode(trim(":"), $malaga[1]);
    if (stripos($valor, "Almería") !== false OR $aforo[1] < 10)  {
        unset($AgendaTotal[$codigo]);
    }
};

echo "Tras la eliminación, quedan " .count($AgendaTotal). " eventos.<br><br>";

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
};

echo "<br><b>5. Control de Estados / Umbrales</b><br><br>";
foreach ($AgendaTotal as $codigo => $valor) {
    $malaga = explode(trim(","), $valor);
        $aforo = explode(trim(":"), $malaga[1]);
    if ($aforo[1] > 45)  {
        $AgendaTotal[$codigo] = $valor. " [GRAN EVENTO]";
    } else if ($aforo[1] > 10 AND $aforo[1] < 45) {
        $AgendaTotal[$codigo] = $valor. " [AFORO MEDIO]";
    } else if ($aforo[1] < 10) {
        $AgendaTotal[$codigo] = $valor. " [AFORO REDUCIDO]";
    }
};

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
};

echo "<br><b>6. Ordenación</b><br><br>";
ksort($AgendaTotal);

foreach ($AgendaTotal as $codigo => $valor) {
    echo $codigo. " => " .$valor. "<br>";
};

echo "<br><br>";
echo "Máximo con if";
$max = 0;
foreach ($AgendaTotal as $codigo => $valor) {
    $malaga = explode(trim(","), $valor);
        $aforo = explode(trim(":"), $malaga[1]);
    if ($aforo[1] > $max) {
        $max = $aforo[1];
    }
}
echo "<br>El aforo máximo es: " .$max. "<br><br>";

echo "Mínimo con if";
$min = 100;
foreach ($AgendaTotal as $codigo => $valor) {
    $malaga = explode(trim(","), $valor);
        $aforo = explode(trim(":"), $malaga[1]);
    if ($aforo[1] < $min) {
        $min = $aforo[1];
    }
}

echo "<br>El aforo mínimo es: " .$min. "<br><br>";

echo "Máximo en foreach";
$aforomax = 0;
foreach ($AgendaTotal as $codigo => $valor) {
        $malaga = explode(trim(","), $valor);
            $aforo = explode(trim(":"), $malaga[1]);
        
        $aforomax = max($aforomax, $aforo[1]);
};

echo "<br>El aforo máximo es: " .$aforomax. "<br><br>";

echo "Mínimo en foreach";
$aforomin = 100;
foreach ($AgendaTotal as $codigo => $valor) {
        $malaga = explode(trim(","), $valor);
            $aforo = explode(trim(":"), $malaga[1]);
        
        $aforomin = min($aforomin, $aforo[1]);
};

echo "<br>El aforo mínimo es: " .$aforomin. "<br><br>";

echo "Máximo con variable";
$aforomaximo = [];
foreach ($AgendaTotal as $codigo => $valor) {
        $malaga = explode(trim(","), $valor);
            $aforo = explode(trim(":"), $malaga[1]);
        
        $aforomaximo[] = $aforo[1];
};

echo "<br>El aforo máximo es: " .max($aforomaximo). "<br><br>";

echo "Mínimo con variable";
$aforominimo = [];
foreach ($AgendaTotal as $codigo => $valor) {
        $malaga = explode(trim(","), $valor);
            $aforo = explode(trim(":"), $malaga[1]);
        
        $aforominimo[] = $aforo[1];
};

echo "<br>El aforo máximo es: " .min($aforominimo). "<br><br>";
?>