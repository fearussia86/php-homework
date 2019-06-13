<?php
require_once "Irun.php";
require_once "Ieat.php";
//Здесь будет класс Кошек и их методов

class Dog implements Irun, Ieat //implements
{

protected $speed;
protected $name;

public function run(int $speed, string $animal) {

if(!is_int($speed)) {
  echo "Введите число в скорости животного";
}

  echo "Собака бежит со скоростью $speed км в час за $animal";

}





public function eat(string $animal) {
  echo "Собака съела животное ".$animal;
}

}

 ?>
