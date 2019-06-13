

<?php
require_once "Dog.php";
require_once "Cat.php";
require_once "Mouse.php";



//$handler1 = Animal::getAnimalName($name);


//$animal = Animal::setAnimalName($name);



$dog1 = new Dog();

$dog1->run('25', "Мышкой");

$cat = new Cat();

$cat->eat("мышку");

//var_dump($dog1::eat('Шарик', $cat));


 ?>
