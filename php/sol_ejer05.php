<?php
/*
    Crea un programa que admita por GET un parametro llamado valor
    http://localhost/ejer02.php?valor=4
    Indique:

*/
function topositive($n){
    // if($n<0) return $n*=-1;
    //  return $n;
    return $n<0 ? $n*=-1:$n;
}
    $v = $_GET["valor"];
    echo $v;
    if($v<0){
       $v*=-1;
    }
    echo $v;

?>