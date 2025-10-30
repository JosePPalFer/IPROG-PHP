<!DOCTYPE html>
<html>
<body>
<?php
echo "Ejercicio 1: DNI Simple<br><br>";
//Pide el número de DNI (sin letra) y calcula la letra correspondiente según el módulo 23. Las letras se asignan con la secuencia:

$numdni = 49531672;
$secletras = "TRWAGMYFPDXBNJZSQVHLCKE";

$modulo = $numdni % 23;
$letradni = $secletras[$modulo];

echo "El DNI completo es: ".$numdni.$letradni;


echo "<br><br><br>Ejercicio 2: Edad y categoría<br><br>";
//Pide al usuario su año de nacimiento y calcula su edad actual (usa el año 2025). Según la edad, muestra un mensaje:
//Menor de 18 → “Menor de edad”
//De 18 a 24 → “Joven adulto” : supone un descuento de un 5%
//De 25 a 59 → “Adulto”: supone un descuento de un 15%.
//60 o más → “Senior” : supone un descuento del 30%
//En función de la categoria, genere o no una tarjeta:
//"Senior": Tarjeta Diamantium.
//"Adulto": Tarjeta Oro.
//"Joven": Tarjeta Plata.
//Menor de edad:  No se permite tarjeta.
$usuarionacimiento = 1998;
$añoactual = 2025;

$edadactual = $añoactual - $usuarionacimiento;

if($edadactual < 18) {//Menor de 18 → “Menor de edad”
    echo "Menor de edad";
} elseif($edadactual >= 18 && $edadactual <= 24) {//De 18 a 24 → “Joven adulto” : supone un descuento de un 5%.
    echo "Joven adulto: supone un descuento de un 5%. ".$tarjeta = "Tarjeta Plata";
} elseif($edadactual >= 25 && $edadactual <= 59) {//De 25 a 59 → “Adulto”: supone un descuento de un 15%.
    echo "Adulto: supone un descuento de un 15%. ".$tarjeta = "Tarjeta Oro";
} else{//60 o más → “Senior” : supone un descuento del 30%.
    echo "Senior: supone un descuento del 30%. ".$tarjeta = "Tarjeta Diamantium";
}

echo "<br><br><br>Ejercicio 3: Viajes";
//Genera un array donde se indique la ciudad y el precio del viaje. Genera al menos 5 ciudades. Los nombres de las ciudades irán en posiciones pares: 0, 2, 4, 6... y sus precios de viajes correspondientes  en las impares, 1,3,5... 
//Simula que un usuario te indica su edad y la ciudad a la que quiere viajar. Indica el precio y en función de la tarjeta que le corresponda, un descuento distinto.
$ciudades = array("Sevilla",10,"Cordoba",12,"Madrid",21,"Bilbao",30,"Barcelona",33);
$usuarioedad = 27;
$usuariociudad = "Madrid";
for($i = 0; $i < count($ciudades); $i+=2){
    if($ciudades[$i] == $usuariociudad){
        $precioviaje = $ciudades[$i+1];
        echo "<br><br>El precio del viaje a ".$usuariociudad." es de ".$precioviaje." euros.<br>";
        if($usuarioedad < 18){
            echo "No se permite tarjeta. Precio final: ".$precioviaje." euros.";
        } elseif($usuarioedad >= 18 && $usuarioedad <= 24){
            $descuento = $precioviaje * 0.05;
            $preciofinal = $precioviaje - $descuento;
            echo "Tarjeta Plata. Precio final con descuento del 5%: ".$preciofinal." euros.";
        } elseif($usuarioedad >= 25 && $usuarioedad <= 59){
            $descuento = $precioviaje * 0.15;
            $preciofinal = $precioviaje - $descuento;
            echo "Tarjeta Oro. Precio final con descuento del 15%: ".$preciofinal." euros.";
        } else{
            $descuento = $precioviaje * 0.30;
            $preciofinal = $precioviaje - $descuento;
            echo "Tarjeta Diamantium. Precio final con descuento del 30%: ".$preciofinal." euros.";
        }
    }
}

?>
</body>
</html>