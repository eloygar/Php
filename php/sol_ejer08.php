<?php
/**
 * Guarda en un array los números 4,6,2,1,-6,3
 * Recorre el array, y muestra por pantalla cual es el mayor de todos esos números.
 */


$numeros = array(4,6,2,1,-6,3);

if(count($numeros)>0){
    $mayor = $numeros[0];
    for ($i=0; $i < count($numeros); $i++) { 
        if($numeros[$i] > $mayor){
            $mayor = $numeros[$i];
        }
    }
    echo $mayor;
}
