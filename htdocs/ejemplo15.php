<?php

  class Person{
  public $name;
  public $surname; 
  public $age =18;
  private $height;
  protected $direction ;
   function __constructor($n,$s){
    $this->name=$n;
    $this->surname=$s;
   }

     function getFullName(){
        return $this->name." ".$this->surname;
    }
    public function isAdult(){
      if($this->age>=18){return "si";}else return "no";
    }

}
$brother=new Person();
$brother->name='Alberto';
$brother->surname='Apellido';
echo $brother->getFullName();
echo 'esta persona'.$brother->isAdult().' Adulta';

?>