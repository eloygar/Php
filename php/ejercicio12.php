<?php

 $list = array(2,4,5,1,5);
function isOnTheList ($list,$value){
    return in_array($list,$value);
}
// if (isOnTheList($list,4)){
//     echo "esta en la lista";
// } echo "NO ESTA EN LA LISTA";
echo isOnTheList($list,5)?"esta en la lista": "no esta en la lista"; 
?>