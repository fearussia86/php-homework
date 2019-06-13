<?php

require_once "Interface.php";
//Файл с абстрактным классом
abstract class Animal implements InterfaceAnimal {

protected $speed;
protected $name;


public function setAnimalName($name) {
  $this->name = $name;
}

public function getAnimalName() {
  return $this->name;
}

abstract public function have_eat();


abstract public function eat();




abstract public function run($speed);

}



 ?>
