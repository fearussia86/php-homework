<?php

namespace Web\FrontController\Models;

use Web\FrontController\Core\DB;
use Web\FrontController\Core\Repository;
use Web\FrontController\Core\Article;

//require_once __DIR__ . '/../Core/Repository.php';
//require_once __DIR__ . '/../Models/Picture.php';


class ArticleRepository implements Repository
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
     $sql = 'SELECT * FROM Article';
     return $this->db->getAll($sql);
     
 
    
   
         
         
      
    }
    public function getById(int $id)
    {
        $sql = 'SELECT FROM Article WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db-paramsGetOne($sql, $params);
    }
    
    
    //В функцию save придут данные  переменные $params, (массив), указанный в файле PictureController
    public function save($params) {
         
$sql = 'INSERT INTO Article (title, content, date) VALUES (:title, :content, :date)';

return $this->db->nonSelectQuery($sql, $params);
         
    }
    
    
    
}