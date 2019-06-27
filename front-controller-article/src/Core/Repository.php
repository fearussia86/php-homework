<?php 
namespace Web\FrontController\Core;
ini_set('display_errors',1);
error_reporting(E_ALL);



interface Repository {
     
     public function getAll(); //Получение всех записей
     public function getById(int $id); //Получение по ID элемента
     public function save($params); //Добавление новой записи. 
     
     
     
}



?>