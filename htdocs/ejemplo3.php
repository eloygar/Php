<?php
// paso parametros por get  
//?numero=8&?nombre=angel

$num = $_GET["numero"];
$name = $_GET["nombre"];
if ($num >= 0) {
    # code...
    echo "el numero " . $num . " es postivo";
} else {

    echo "el numero " . $num . "es negaivo";
}
