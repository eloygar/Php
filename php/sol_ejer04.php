<?php
/*
* Crea un programa que posea una función que indique si un número es par o impar
* Usa la función para mostrar por pantalla si el número 22 es par o impar
* Usa la función para mostrar por pantalla si el número 33 es par o impar
*/

function es_par($num){
    // if($num%2 == 0){
    //     echo $num."es par";
    // } else {
    //     echo $num."es impar";
    // }
    return $num%2==0;
}

es_par(22);
echo "<br>";
es_par(33);

?>