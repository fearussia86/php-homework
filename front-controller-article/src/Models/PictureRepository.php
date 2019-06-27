<?php

namespace Web\FrontController\Models;

use Web\FrontController\Core\DB;
use Web\FrontController\Core\Repository;
use Web\FrontController\Models\Picture;

//require_once __DIR__ . '/../Core/Repository.php';
//require_once __DIR__ . '/../Models/Picture.php';


class PictureRepository implements Repository
{
    
    private $db;
    
    public function __construct()
    {
         
         $this->db = DB::getDB();
       
    }
    
    public function getAll()
    {
         //1. Составить sql запрос
         //2. Получить все записи
         //3. Вывести var_dump
         
     //Возвращает все картинки. 
     //Вначале собирает из базы данных все картинки и возвращает их.
     $sql = 'SELECT * FROM Picture';
     return $this->db->getAll($sql);
     
 
    
   
         
         
      
    }
    public function getById(int $id)
    {
        $sql = 'SELECT FROM Picture WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db-paramsGetOne($sql, $params);
    }
    
    
    //В функцию save придут данные  переменные $params, (массив), указанный в файле PictureController
    public function save($params) {
         
$sql = 'INSERT INTO Picture (title, description, img, yearCreated) VALUES (:title, :description, :img, :yearCreated)';

return $this->db->nonSelectQuery($sql, $params);
         
    }
    
    
    
}