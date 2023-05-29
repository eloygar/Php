<?php
/**
 * Crea una clase que permita almacenar los datos de un animal
 * En concreto tendremos que guardar:
 * - Nombre (texto)
 * - Edad (numérico)
 * - Si es salvaje (booleano)
 * - peso(numérocp)
 * La clase tendrá un método que determine si el animal es peligroso
 * - Será peligroso cuando su peso supere los 10 kilos y sea salvaje
 * Añade un constructor a la clase
 * 
 * Por último, crea un objeto de tipo Animal
 * - Muestra por pantalla sus datos
 */
class Animal{
    // Atributos
    public $name = "";
    public $age = 0;
    public $isSavage = false;
    public $weight = 0;

    // Constructor
    public function __constructor($name, $age, $isSavage, $weight){
        $this->name = $name;
        $this->age = $age;
        $this->isSavage = $isSavage;
        $this->weight = $weight;
    }

    // Metodos
    public function esPeligroso(){
        // if($this->isSavage && $this->weight > 10){
        //     return true;
        // }
        // return false;
        return $this->isSavage && $this->weight > 10;
    }
}

$gamusino = new Animal();
$gamusino->name = "Gamusino";
$gamusino->age = 1;
$gamusino -> isSavage = true;
$gamusino -> weight = 11;
if($gamusino->esPeligroso()){
    echo $gamusino->name." es peligroso";
} else {
    echo $gamusino->name." no es peligroso";
}


?>