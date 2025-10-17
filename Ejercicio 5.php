<!DOCTYPE html>
<html>
<body>
<?php
//Quinto Ejercicio
echo "Los 100 primeros numeros pares son :<br>";
$pares = array ();
for($u=0; $u <= 100; $u++) {
    if ($u % 2 == 0) {
    $pares[] = $u;
  }
}

for($u=0; $u < count($pares); $u++) {
echo $pares[$u]. " ";
}
?>
</body>
</html>