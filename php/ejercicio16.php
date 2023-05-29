<?php
/**
 * Crea una clase que represente un Círculo
 * La clase círculo, tendra 3 métodos
 * - Uno para calcular su área
 * - Otro para calcular su perímetro
 * - Otro para calcular su diámetro
 * Crea también su constructor
*/

class Circulo
{
    // Declaración de una propiedad
    public $radio;
    public function __construct(int $radio) {
        $this->radio = $radio;

    }
    
    // public function __construct(int $x, int $y = 0) {
    //     $this->x = $x;
    //     $this->y = $y;
    // }

     public  function area($radio){
        return pi()*$radio;
    }
    public function perimetro($radio){
        return 2*pi()*$radio;
    }
    public function diametro($radio){
        return 2*$radio;
    }
}

$circulo1 = new Circulo(3);
$circulo1->$radio=3;
echo $circulo1->area($radio);
echo $circulo1->perimetro($radio);
echo $circulo1->diametro($radio);
