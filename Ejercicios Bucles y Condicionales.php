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


?>
</body>
</html>