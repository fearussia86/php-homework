<?php
require_once "Irun.php";
require_once "Ihave_eaten.php";
require_once "Ieat.php";
//Здесь будет класс Кошек и их методов

class Cat implements Irun, Ieat, Ihave_eaten //implements
{

protected $speed;
protected $name;

public function run(int $speed, string $animal) {

if(!is_int($speed)) {
  echo " Введите число в скорости животного ";
}

  echo " Кошка бежит со скоростью $speed км в час  за $animal ";

}


public function have_eaten ($animal) {
  echo " Кошка была съедена животным ".$animal ;
}


public function eat(string $animal) {
  echo " Кошка съела животное $animal ";
}

}

 ?>
