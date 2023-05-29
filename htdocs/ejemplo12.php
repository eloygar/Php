<?php

    $fruta10='pera';
    $frutas = array('fresa','pera','manzana');
    print_r($frutas);
    array_push($frutas,6);

    echo " ".$frutas[1];

    foreach($frutas as $indice=>&$valor){
        echo $indice ;
        echo " ".$valor;

    }   
    foreach($frutas as $indice=>&$valor){
       $suma +=$valor;

    }   
     $suma/=count($frutas);
     echo $suma;
    
?>  