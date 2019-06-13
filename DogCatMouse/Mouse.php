<?php
require_once "Irun.php";
require_once "Ihave_eaten.php";

//Здесь будет класс Кошек и их методов

class Mouse implements Irun, Ihave_eaten //implements
{

protected $speed;
protected $name;

public function run(int $speed, string $animal) {

if(!is_int($speed)) {
  echo "Введите число в скорости животного";
}

  echo "Мышок бежит со скоростью $speed км в час и убегает от животного $animal";

}


public function have_eaten ($animal) {
  echo "Мышечка была съедена животным ".$animal;
}




}

 ?>
