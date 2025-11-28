<!DOCTYPE html>
<html>
<body>
<?php
$frase = "PHP es un lenguaje de programación. Me gusta este lenguaje porque es el lenguaje de la web.";
$palabra_buscada = "lenguaje";

$frase_min = strtolower($frase);
$palabra_min = strtolower($palabra_buscada);
$contador = 0;
$palabras = explode(" ", $frase_min);
$total_palabras = count($palabras);
foreach ($palabras as $palabra) {
    if ($palabra == $palabra_buscada) {
        $contador++;
    }
}

echo "La palabra " . $palabra_buscada . " aparece " . $contador . " veces en la frase<br>";
echo "El total de palabras en la frase es: " . $total_palabras . "<br>";

?>
</body>
</html>