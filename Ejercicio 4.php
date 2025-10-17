<!DOCTYPE html>
<html>
<body>
<?php
//Cuarto Ejercicio
$anno = array (2000, 2004, 2008, 2012, 2014, 2016, 2018, 2020, 2024);
$a = 0;
while($a < count($anno)) {
    if($anno[$a] / 4 = 0 && $anno[$a] / 100 = 0 && $anno[$a] / 400 = 0) {
      echo $anno[$a]. "es año bisiesto";
    } else{
      echo $anno[$a]. "no es año bisiesto";
    }
    $i++;
}

?>
</body>
</html>