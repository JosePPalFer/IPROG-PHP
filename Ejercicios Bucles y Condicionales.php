<!DOCTYPE html>
<html>
<body>
<?php
echo "1- Crea un programa que recorra del 1 al 30 e imprima:<br><br>";
$multiplo = array ();

for($n=1; $n <= 30; $n++) {
    if ($n % 3 == 0 && $n % 5 == 0) { //"FizzBuzz" si es múltiplo de ambos
    $multiplo[] = "FizzBuzz";
  } elseif ($n % 3 == 0) { //"Fizz" si es múltiplo de 3
    $multiplo[] = "Fizz";
  } elseif ($n % 5 == 0) { //"Buzz" si es múltiplo de 5
    $multiplo[] = "Buzz";
  } else { //o el número en caso contrario.
    $multiplo[] = $n;
  }
}

for($n=0; $n < count($multiplo); $n++) {
echo $multiplo[$n]. " ";
}

echo "<br><br><br>2.- Escribe un programa que aconseje con un mensaje por pantalla la necesidad de llevar paraguas en función del tiempo.<br><br>";
$a = 1; //$a tomará los valores: 0 si no llueve y 1 si sí llueve.
$b = 0; //$b tomara los valores: 0 si no hace viento y 1 si hace viento.

if ($a == 1 && $b == 0) { //Si llueve y no hace viento, "Se necesita paraguas".
    echo "Se necesita paraguas";
} elseif ($a == 1 && $b == 1) { //Si llueve y sí hace viento, "No se necesita paraguas".
    echo "No se necesita paraguas";
} else { //En cualquier otro caso "No se necesita paraguas"
    echo "No se necesita paraguas";
}

echo "<br><br><br>3.- Modifica el ejercicio anterior para añadir una tercera variable.<br><br>";
$a = 0; //$a tomará los valores: 0 si no llueve y 1 si sí llueve.
$b = 0; //$b tomara los valores: 0 si no hace viento y 1 si hace viento.
$c = 38; //$c tomará los valores posibles de temperatura en ºC.

if ($a == 1 && $b == 0) { //Si llueve y no hace viento, "Se necesita paraguas".
    echo "Se necesita paraguas";
} elseif ($a == 1 && $b == 1) { //Si llueve y sí hace viento, "No se necesita paraguas".
    echo "No se necesita paraguas";
} elseif ($a == 0 && $b == 0 && $c > 37)  { //Si la temperatura es mayor a 37ºC y no llueve, ni hace viento, deberán tambien sacar un paraguas.
    echo "Se necesita paraguas";
} else { //En cualquier otro caso "No se necesita paraguas"
    echo "No se necesita paraguas";
}

echo "<br><br><br>4.- Haz un programa que pida tres números y determine si al menos uno de ellos es mayor que 100, usando operadores lógicos y condicionales.<br><br>";
$numero = (int)readline("Por favor, ingresa un número: "); //$numero = readline("Por favor, ingresa un número: ");
$numero2 = (int)readline("Por favor, ingresa un número: ");
$numero3 = (int)readline("Por favor, ingresa un número: ");

if ($numero > 100 || $numero2 > 100 || $numero3 > 100) {
    echo "Al menos uno de los es mayor que 100";
} else {
    echo "Ningún número es mayor que 100";
}

echo "<br><br><br>5.- Escribe un programa que pida un número y usando un bucle while, imprima todos los números desde ese número hasta cero, pero solo si el número es positivo.<br><br>";
$numero = (int)readline("Por favor, ingresa un número positivo: ");
if ($numero >= 0) {
    while ($numero >= 0) {
        echo $numero. " ";
        $numero--;
    }
} else {
    echo "El número no es positivo.";
}

echo "<br><br><br>6.- Escribe un programa que calcule un número al azar, y luego pida un número al usuario repetidamente, hasta que el usuario acierte.<br><br>";
$numeroSecreto = rand(1, 100);
$intentos = 0;
do {
    $numeroUsuario = (int)readline("Adivina el número entre 1 y 100: ");
    $intentos++;
    if ($numeroUsuario < $numeroSecreto) {
        echo "Demasiado bajo. Inténtalo de nuevo.\n";
    } elseif ($numeroUsuario > $numeroSecreto) {
        echo "Demasiado alto. Inténtalo de nuevo.\n";
    } else {
        echo "¡Enhorabuena! Has acertado el número $numeroSecreto en $intentos intentos.\n"; //Cuando acierte muestrale un mensaje por pantalla de enhorabuena e indicale el número de intentos que ha necesitado.
    }
} while ($numeroUsuario != $numeroSecreto);

echo "<br><br><br>7.- Crea un programa que pida un número y verifique si es un número primo o no. Usa bucles y condicionales.<br><br>";
$numero = (int)readline("Por favor, ingresa un número para verificar si es primo: ");
if ($numero <= 1) {
    echo "$numero no es un número primo.";
} else {
    $esPrimo = true;
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo) {
        echo "$numero es un número primo.";
    } else {
        echo "$numero no es un número primo.";
    }
}

echo "<br><br><br>8.- Calculadora. Menu: pulsa 0 para salir, 1 para sumar, 2 para restar, 3 multiplica y 4 dividir.<br><br>";
$opcion = (int)readline("Selecciona una opción (0: salir, 1: sumar, 2: restar, 3: multiplicar, 4: dividir): "); //Si pulsa 1, 2, 3, o 4, debe pedirle al usuario los números
if ($opcion >= 1 && $opcion <= 4) { //y mostrarle el resultado de la operación seleccionada.
    $num1 = (float)readline("Ingresa el primer número: ");
    $num2 = (float)readline("Ingresa el segundo número: ");
    switch ($opcion) {
        case 1:
            $resultado = $num1 + $num2;
            echo "El resultado de la suma es: $resultado";
            break;
        case 2:
            $resultado = $num1 - $num2;
            echo "El resultado de la resta es: $resultado";
            break;
        case 3:
            $resultado = $num1 * $num2;
            echo "El resultado de la multiplicación es: $resultado";
            break;
        case 4:
            if ($num2 != 0) {
                $resultado = $num1 / $num2;
                echo "El resultado de la división es: $resultado";
            } else {
                echo "Error: No se puede dividir por cero.";
            }
            break;
    }
} else {
    echo "Saliendo de la calculadora.";
}


//9.- (en clase)Escribe un programa que pida un nombre de usuario y una contraseña, y verifique si ambos cumplen con estas condiciones:
//a) El nombre de usuario debe tener más de 5 caracteres.
//b) La contraseña debe tener al menos 8 caracteres y contener al menos un número.
//c) Usa condicionales con operadores AND y OR para validar.

?>
</body>
</html>