<?php
/**
 * Muestra por pantalla si hoy es fin de semana o no.
 * Tendrás que ver el día de la semana que es hoy
 * 
 *  https://www.php.net/manual/es/datetime.formats.date.php
 */

$timestamp = time();
if(date('D', $timestamp) === 'Sat' || date('D', $timestamp) === "Sun") 
    echo "Es fin de semana\n";
else
    echo "No es fin de semana\n";

?>