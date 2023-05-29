<?php
/*
    Crea un programa que guarde en una variable de tipo texto 
    un nombre de persona.
    Muestre por pantalla:
    - Ese nombre en maýusculas
    - El numero de caracteres del texto
    - La primera letra de ese nombre
    - La última letra de ese nombre
    - La codificación sha1 (hash) de ese string
    - El nombre de forma invertida
    - Indica si en alguna posición de tu string aparece la palabra 'ana'

    https://www.php.net/manual/es/ref.strings.php
*/


$nombre = "PHPLOVER8000";
$mayusculas= strtoupper($nombre);
$cantidad= strlen($nombre);
$primera= $nombre[0];
$ultima= $nombre[strlen($nombre)-1];
$sha1= sha1($nombre);
$invertido=strrev($nombre);
$aparece=str_contains($nombre, "ana");
echo 'El nombre en mayúsculas:'.$mayusculas;
echo '<br/>';
echo 'Num caracteres:'.$cantidad;
echo '<br/>';
echo 'Primera letra:'.$primera;
echo '<br/>';
echo 'Última letra:'.$ultima;
echo '<br/>';
echo 'Codigo hash:'.$sha1;
echo '<br/>';
echo 'Inverso:'.$invertido;
echo '<br/>';
echo 'Aparece ana:'.$aparece;
echo '<br/>';


?>