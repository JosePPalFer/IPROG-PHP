<!-- HTML para recoger el número -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ejercicios Moodle tanda primera</title>
</head>

<body>
    <h1>1.- Comprobar si el número es mayor de 10</h1>
    <form action="ejercicio1.php" method="get">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Comprobar</button>
    </form>


    <h1>2.- Precio y descuento</h1>
    <form action="ejercicio2.php" method="get">
        <label for="precio">Introduce un precio (decimal):</label>
        <input type="precio" id="precio" name="precio" required>
        <label for="descuento">Introduce un descuento (10% por ejemplo como 0.1):</label>
        <input type="descuento" id="descuento" name="descuento" required>
        <button type="submit">Comprobar</button>
    </form>


    <h1>3.- Números Pares</h1>
    <form action="ejercicio3.php" method="get">
        <label for="numero">Introduce el último número par:</label>
        <input type="numero" id="numero" name="numero" required>
        <button type="submit">Comprobar</button>
    </form>

    <h1>4.- contador de X en X hasta Y</h1>
    <form action="ejercicio4.php" method="get">
        <label for="numero">Introduce el último número hasta el cual contar:</label>
        <input type="numero" id="numero" name="numero" required>
        <label for="cnt">Introduce el contador:</label>
        <input type="cnt" id="cnt" name="cnt" required>
        <button type="submit">Comprobar</button>
    </form>


    5. Longitud del Nombre
    PHP
    <?php
    // 5. Define tu nombre completo. Imprime la longitud e indica si es "Corto" (menos de 10 caracteres) o "Largo".
    $nombre_completo = "Ana María Pérez"; // Ejemplo
    $longitud = strlen($nombre_completo);

    if ($longitud < 10) {
        $clasificacion = "Corto";
    } else {
        $clasificacion = "Largo";
    }

    echo "5. Nombre: **$nombre_completo**. Longitud: **$longitud** caracteres. Clasificación: **$clasificacion**.\n";
    ?>
    6. Reemplazo de Palabras
    PHP
    <?php
    // 6. Dada la frase: "La casa es azul, la casa es grande.", reemplaza todas las apariciones de "casa" por "coche".
    $frase_original = "La casa es azul, la casa es grande.";
    $frase_modificada = str_replace("casa", "coche", $frase_original);

    echo "6. Frase original: **$frase_original**.\n";
    echo "   Frase modificada: **$frase_modificada**.\n";
    ?>
    7. Nombre del Mes con switch
    PHP
    <?php
    // 7. Define una variable mes (del 1 al 12). Usa switch para imprimir el nombre del mes o "Mes no válido".
    $mes = 9; // Ejemplo (Septiembre)

    switch ($mes) {
        case 1:
            $nombre_mes = "Enero";
            break;
        case 2:
            $nombre_mes = "Febrero";
            break;
        case 3:
            $nombre_mes = "Marzo";
            break;
        case 4:
            $nombre_mes = "Abril";
            break;
        case 5:
            $nombre_mes = "Mayo";
            break;
        case 6:
            $nombre_mes = "Junio";
            break;
        case 7:
            $nombre_mes = "Julio";
            break;
        case 8:
            $nombre_mes = "Agosto";
            break;
        case 9:
            $nombre_mes = "Septiembre";
            break;
        case 10:
            $nombre_mes = "Octubre";
            break;
        case 11:
            $nombre_mes = "Noviembre";
            break;
        case 12:
            $nombre_mes = "Diciembre";
            break;
        default:
            $nombre_mes = "Mes no válido";
            break;
    }

    echo "7. El número de mes **$mes** corresponde a: **$nombre_mes**.\n";
    ?>
    8. Recorrido de Array de Animales
    PHP
    <?php
    // 8. Crea un array con 4 animales. Recórrelo usando foreach e imprime cada animal.
    $animales = ["Perro", "Gato", "Pájaro", "Tortuga"];

    echo "8. Listado de animales:\n";
    foreach ($animales as $animal) {
        echo "* $animal\n";
    }
    ?>
    9. Capitales de Países
    PHP
    <?php
    // 9. Crea un array con 3 países y sus capitales. Imprime solo la capital del país que tú elijas.
    $paises = [
        "España" => "Madrid",
        "Francia" => "París",
        "Alemania" => "Berlín"
    ];

    $pais_elegido = "Francia";

    if (isset($paises[$pais_elegido])) {
        $capital = $paises[$pais_elegido];
        echo "9. La capital de **$pais_elegido** es **$capital**.\n";
    } else {
        echo "9. País no encontrado.\n";
    }
    ?>
    10. Comprobación de Letra 'A'
    PHP
    <?php
    // 10. Pide una letra. Imprime la letra en mayúscula y comprueba si esa letra es la 'A'.
    $letra = 'm'; // Ejemplo

    $letra_mayuscula = strtoupper($letra);

    if ($letra_mayuscula === 'A') {
        $mensaje = "SÍ es la letra 'A'.";
    } else {
        $mensaje = "NO es la letra 'A'.";
    }

    echo "10. Letra ingresada: **$letra_mayuscula**. Resultado: **$mensaje**.\n";
    ?>
    11. Bucle con break
    PHP
    <?php
    // 11. Recorre los números del 1 al 100. Cuando encuentres el número 42, imprímelo y detén el bucle.
    echo "11. Recorrido hasta encontrar el 42:\n";
    for ($i = 1; $i <= 100; $i++) {
        if ($i === 42) {
            echo "**$i** (encontrado y detenido).\n";
            break;
        }
    }
    ?>
    12. Ingredientes de Pizza
    PHP
    <?php
    // 12. Crea un array de 5 ingredientes de pizza. Pide un ingrediente al usuario. Comprueba si el ingrediente ya existe en el array.
    $ingredientes_pizza = ["Jamón", "Champiñones", "Queso", "Tomate", "Aceitunas"];
    $ingrediente_buscado = "Tomate"; // Ejemplo

    if (in_array($ingrediente_buscado, $ingredientes_pizza)) {
        echo "12. El ingrediente **$ingrediente_buscado** **SÍ** está en el array de ingredientes.\n";
    } else {
        echo "12. El ingrediente **$ingrediente_buscado** **NO** está en el array de ingredientes.\n";
    }
    ?>
    13. Tablas de Multiplicar Anidadas (1 al 3)
    PHP
    <?php
    // 13. Usa dos bucles for anidados para imprimir la tabla de multiplicar del 1 al 3.
    echo "13. Tablas de Multiplicar (del 1 al 3):\n";
    for ($i = 1; $i <= 3; $i++) {
        echo "   **Tabla del $i:**\n";
        for ($j = 1; $j <= 10; $j++) {
            $resultado = $i * $j;
            echo "   $i x $j = $resultado\n";
        }
    }
    ?>
    14. Comprobación de Edad
    PHP
    <?php
    // 14. Define la edad. Si es mayor de 18, verifica si la edad es par o impar. Imprime el resultado.
    $edad = 25; // Ejemplo

    if ($edad > 18) {
        echo "14. La edad es **$edad** (mayor de 18). ";
        if ($edad % 2 === 0) {
            echo "Es un número **par**.\n";
        } else {
            echo "Es un número **impar**.\n";
        }
    } else {
        echo "14. La edad es **$edad** (no es mayor de 18).\n";
    }
    ?>
    15. Caracteres en Posición Impar
    PHP
    <?php
    // 15. Define una palabra. Usa un bucle for para imprimir cada carácter, pero solo los que están en posición impar (1, 3, 5, etc.).
    $palabra = "programacion"; // Ejemplo: p(1) r o g r a m a c i o n (13)
    echo "15. Caracteres en posición impar de **$palabra**:\n";

    for ($i = 0; $i < strlen($palabra); $i++) {
        // La posición es $i + 1. Si ($i + 1) % 2 !== 0, es impar.
        // Esto es equivalente a verificar si $i es PAR, ya que los arrays son base 0.
        if ($i % 2 === 0) {
            echo $palabra[$i] . " ";
        }
    }
    echo "\n";
    ?>
    16. Empleados con Mayor Salario
    PHP
    <?php
    // 16. Define un array de empleados con sus sueldos. Recórrelo e imprime solo el nombre de los que ganan más de 2000.
    $empleados = [
        "Juan" => 1500,
        "María" => 2500,
        "Pedro" => 2100,
        "Ana" => 1900
    ];

    echo "16. Empleados que ganan más de 2000:\n";
    foreach ($empleados as $nombre => $sueldo) {
        if ($sueldo > 2000) {
            echo "* $nombre (Sueldo: $sueldo)\n";
        }
    }
    ?>
    17. Limpieza y Comprobación de Respuesta
    PHP
    <?php
    // 17. Pide una respuesta. Limpia espacios (trim) y convierte a minúsculas (strtolower). Comprueba si es exactamente "si".
    $respuesta = " Si "; // Ejemplo

    // Limpiar espacios y convertir a minúsculas
    $respuesta_limpia = strtolower(trim($respuesta));

    if ($respuesta_limpia === "si") {
        echo "17. La respuesta limpia es **'si'**.\n";
    } else {
        echo "17. La respuesta limpia NO es 'si', es **'$respuesta_limpia'**.\n";
    }
    ?>
    18. Condiciones Lógicas
    PHP
    <?php
    // 18. Pide dos números, A y B. Comprueba si (A > 10) y si (B <= 5). Si ambas son ciertas, imprímelas. Si solo una, indica cuál.
    $A = 12; // Ejemplo
    $B = 4; // Ejemplo

    $condicion_A = ($A > 10);
    $condicion_B = ($B <= 5);

    echo "18. Valores: A=$A, B=$B. ";

    if ($condicion_A && $condicion_B) {
        echo "Ambas condiciones son ciertas (A > 10 y B <= 5).\n";
    } elseif ($condicion_A) {
        echo "Solo la condición **A > 10** es cierta.\n";
    } elseif ($condicion_B) {
        echo "Solo la condición **B <= 5** es cierta.\n";
    } else {
        echo "Ninguna de las condiciones es cierta.\n";
    }
    ?>
    19. Relleno de Array con Bucle
    PHP
    <?php
    // 19. Crea un array vacío. Usa un bucle while para agregar los nombres "Alumno 1", "Alumno 2", etc., hasta llegar a 10 alumnos.
    $alumnos = [];
    $i = 1;
    $total_alumnos = 10;

    while ($i <= $total_alumnos) {
        $alumnos[] = "Alumno " . $i;
        $i++;
    }

    echo "19. Array de alumnos creado:\n";
    print_r($alumnos); // print_r para mostrar el contenido del array de forma legible
    ?>
    20. Validación de Código
    PHP
    <?php
    // 20. Define un código. Verifica que tiene exactamente 6 caracteres y que empieza por la letra 'P' (substr).
    $codigo = "P45F89"; // Ejemplo

    $longitud_correcta = (strlen($codigo) === 6);
    $empieza_por_P = (substr($codigo, 0, 1) === 'P');

    echo "20. Código a verificar: **$codigo**. ";

    if ($longitud_correcta && $empieza_por_P) {
        echo "El código es **válido** (6 caracteres y empieza por 'P').\n";
    } else {
        $razon = "";
        if (!$longitud_correcta) {
            $razon .= "Longitud incorrecta (" . strlen($codigo) . "). ";
        }
        if (!$empieza_por_P) {
            $razon .= "No empieza por 'P'.";
        }
        echo "El código es **inválido**. Razón: $razon\n";
    }
    ?>
    21. Validación de Contraseña
    PHP
    <?php
    // 21. Recorre un array de contraseñas. Verifica: 1) \$leg 8$ caracteres (strlen); 2) Contiene el carácter $ (strpos). Imprime "Segura" o "Débil".
    $contrasenas = ["P4$$word", "segura123", "P4$w", "MiC$lave"];

    echo "21. Verificación de Contraseñas:\n";

    foreach ($contrasenas as $pass) {
        $longitud_ok = (strlen($pass) >= 8);
        $contiene_dolar = (strpos($pass, '$') !== false); // strpos devuelve la posición o false

        $estado = "";
        if ($longitud_ok && $contiene_dolar) {
            $estado = "Segura";
        } else {
            $estado = "Débil";
        }

        echo "* Contraseña '$pass' -> **$estado**.\n";
    }
    ?>
    22. Conteo de Palabras
    PHP
    <?php
    // 22. Cuenta cuántas veces aparece la palabra "lenguaje" (sin importar mayúsculas/minúsculas) en una frase, y el total de palabras.
    $frase = "PHP es un lenguaje de programación. Me gusta este lenguaje porque es el lenguaje de la web.";
    $palabra_buscada = "lenguaje";

    // Contar apariciones (sin importar mayúsculas/minúsculas)
    $frase_min = strtolower($frase);
    $palabra_min = strtolower($palabra_buscada);
    $ocurrencias = substr_count($frase_min, $palabra_min);

    // Contar total de palabras
    $total_palabras = str_word_count($frase);

    echo "22. Frase: **$frase**.\n";
    echo "   La palabra '**$palabra_buscada**' aparece **$ocurrencias** veces.\n";
    echo "   El total de palabras en la frase es: **$total_palabras**.\n";
    ?>
    23. Cálculo de Promedio
    PHP
    <?php
    // 23. Calcula el promedio de un array de notas. Si alguna nota es < 4, se cuenta como 0 para el promedio final. Imprime si "Aprobó" (promedio > 6) o "Suspendió"
    $notas = [7, 8, 3, 9, 6];
    $notas_ajustadas = [];

    // 1. Ajustar notas y sumarlas
    $suma_notas = 0;
    foreach ($notas as $nota) {
        if ($nota < 4) {
            $nota_ajustada = 0;
        } else {
            $nota_ajustada = $nota;
        }
        $notas_ajustadas[] = $nota_ajustada;
        $suma_notas += $nota_ajustada;
    }

    // 2. Calcular promedio
    $num_notas = count($notas_ajustadas);
    $promedio_final = $suma_notas / $num_notas;

    // 3. Determinar resultado
    if ($promedio_final > 6) {
        $resultado = "Aprobó";
    } else {
        $resultado = "Suspendió";
    }

    echo "23. Notas originales: " . implode(", ", $notas) . "\n";
    echo "   Notas ajustadas (si < 4, es 0): " . implode(", ", $notas_ajustadas) . "\n";
    echo "   Promedio final: **" . number_format($promedio_final, 2) . "**.\n";
    echo "   Resultado: **$resultado**.\n";
    ?>
    24. Matriz 3x3 y Condicionales Anidados
    PHP
    <?php
    // 24. Recorre una matriz 3x3 con bucles anidados. Si un número es Múltiplo de 2 (par), imprímelo en (). Si es múltiplo de 3, imprímelo en []. Si cumple ambas, usa [].
    $matriz = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    echo "24. Recorrido de Matriz 3x3 con formato condicional:\n";
    foreach ($matriz as $fila) {
        foreach ($fila as $numero) {
            $es_par = ($numero % 2 === 0);
            $es_mult_3 = ($numero % 3 === 0);
            $formato = $numero;

            if ($es_par && $es_mult_3) {
                $formato = "[$numero]"; // Cumple ambas
            } elseif ($es_par) {
                $formato = "($numero)"; // Múltiplo de 2 (Par)
            } elseif ($es_mult_3) {
                $formato = "[$numero]"; // Múltiplo de 3
            }

            echo "$formato\t";
        }
        echo "\n";
    }
    ?>
    25. Generación de Acrónimo
    PHP
    <?php
    // 25. Genera un acrónimo a partir de una frase (ej: Sistema de Gestión de Bases de Datos). Ignora palabras de 2 caracteres. La salida debe ser en mayúsculas.
    $frase_acronimo = "Sistema de Gestión de Bases de Datos Abiertos";
    $palabras = explode(" ", $frase_acronimo);
    $acronimo = "";

    foreach ($palabras as $palabra) {
        // Limpiar y comprobar longitud
        $palabra_limpia = trim($palabra);
        if (strlen($palabra_limpia) > 2) {
            // Tomar la primera letra y añadirla
            $acronimo .= strtoupper($palabra_limpia[0]);
        }
    }

    echo "25. Frase: **$frase_acronimo**.\n";
    echo "   Acrónimo generado: **$acronimo**.\n";
    ?>
    26. Reemplazo de Subcadena en Array
    PHP
    <?php
    // 26. Usa un bucle while para encontrar y reemplazar cada aparición de la subcadena "bug" por "feature". El bucle debe detenerse cuando ya no la encuentre.
    $textos = [
        "Hay un bug en el código.",
        "El bug es molesto, arregla el bug.",
        "No hay bugs aquí."
    ];

    $original_textos = $textos; // Guardar original para referencia
    $subcadena_a_buscar = "bug";
    $subcadena_a_reemplazar = "feature";
    $i = 0;

    echo "26. Reemplazo de 'bug' por 'feature' en el array:\n";
    echo "   Originales: \n";
    print_r($original_textos);

    // Usamos un bucle while que se detiene cuando ya no hay más reemplazos que hacer
    while ($i < count($textos)) {
        $texto_actual = $textos[$i];

        // strpos para ver si 'bug' existe. Es importante usar la versión sensible a mayúsculas si no se especifica lo contrario.
        if (strpos($texto_actual, $subcadena_a_buscar) !== false) {
            // Reemplazamos la primera ocurrencia por si la instrucción se refiere a detenerse al no encontrar 'ninguna' en la iteración
            // pero la implementación más lógica es seguir hasta que en *ningún* elemento se encuentre.
            // Si se refiriera a reemplazar *todas* las ocurrencias en un solo paso, se usa str_replace.
            // Asumiendo que se debe reemplazar *cada* aparición en *cada* elemento y avanzar:
            $textos[$i] = str_replace($subcadena_a_buscar, $subcadena_a_reemplazar, $texto_actual);
            $i++; // Avanzamos al siguiente elemento
        } else {
            $i++; // Avanzamos si no lo encontramos
        }
    }

    echo "   Modificados: \n";
    print_r($textos);
    ?>
    27. Serie de Fibonacci con break
    PHP
    <?php
    // 27. Genera la secuencia de Fibonacci (0, 1, 1, 2, 3...) con un bucle for. Usa break para detener la secuencia cuando el número sea mayor a 50.
    $a = 0; // Primer término
    $b = 1; // Segundo término
    $limite = 50;

    echo "27. Secuencia de Fibonacci hasta que el número sea > 50:\n";
    echo "$a, $b"; // Imprimir los dos primeros

    for ($i = 0; $i < 20; $i++) { // Bucle que asegura suficientes iteraciones, o se podría usar un 'while'
        $siguiente = $a + $b;

        if ($siguiente > $limite) {
            break; // Detener la secuencia
        }

        echo ", $siguiente";

        // Actualizar los términos
        $a = $b;
        $b = $siguiente;
    }
    echo "\n";
    ?>
    28. Palíndromos en Array
    PHP
    <?php
    // 28. Define un array de palabras. Recórrelo e imprime solo las palabras que son palíndromos (se leen igual al derecho y al revés) usando strrev().
    $palabras_palindromas = ["ala", "radar", "sol", "reconocer", "casa", "oro"];

    echo "28. Palabras Palíndromas encontradas:\n";
    foreach ($palabras_palindromas as $palabra) {
        // Convertir a minúsculas para una comprobación más robusta, aunque los ejemplos ya lo son.
        $palabra_min = strtolower($palabra);
        $palabra_reversa = strrev($palabra_min);

        if ($palabra_min === $palabra_reversa) {
            echo "* **$palabra**\n";
        }
    }
    ?>
    29. Suma de Diagonal Principal de Matriz
    PHP
    <?php
    // 29. Usa un bucle for anidado (5x5). Calcula la suma i + j. Solo si la suma es múltiplo de 3, imprime la operación y el resultado.
    $dimension = 5;
    $suma_total_mult_3 = 0;

    echo "29. Suma de índices (i+j) para una matriz 5x5. Imprimir si la suma es múltiplo de 3:\n";

    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $suma = $i + $j;

            if ($suma % 3 === 0) {
                echo "   Posición [$i][$j]: $i + $j = **$suma**\n";
                $suma_total_mult_3 += $suma;
            }
        }
    }

    echo "   Suma total de los resultados (múltiplos de 3): **$suma_total_mult_3**.\n";
    ?>
    -->
</body>

</html>