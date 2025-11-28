<!DOCTYPE html>
<html>
<body>
<?php
$frase_acronimo = "Sistema de Gestión de Bases de Datos Abiertos";
$palabras = explode(" ", $frase_acronimo);
$acronimo = "";

foreach ($palabras as $palabra) {
    $palabra_limpia = trim($palabra);
    if (strlen($palabra_limpia) > 2) {
        $acronimo .= strtoupper($palabra_limpia);
    }
}

echo "25. Frase: $frase_acronimo.\n";
echo "   Acrónimo generado: $acronimo.\n";

?>
</body>
</html>