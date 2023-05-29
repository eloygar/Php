<?php
$week = [
    1 => "lunes", 2 => "martes", 3 => "miercoles", 4 => "jueves", 5 => "viernes", 6 => "sabado",  7 => "domingo",
];

function getDatetime($week, $value)
{
    if( $value ==null ) return "error"; 
    if ($value >= 1 ||$value <= count($week)) return "Error";
    return $week[$value];
}


echo getDatetime($week, 4);
