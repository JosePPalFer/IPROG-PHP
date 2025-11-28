<!DOCTYPE html>
<html>
<body>
<?php
$contrasenas = ["P4\$\$word", "segura123", "P4\$w", "MiC\$lave"];

for($i =0; $i<$l_array; $i++){
    $password = $contrasenas[$i];
    if(strlen($password)>=8 && strpos($password, "$") !== false){
        echo "Contraseña segura: $password<br>";
    } else {
        echo "Contraseña débil: $password<br>";
    }
}

?>
</body>
</html>