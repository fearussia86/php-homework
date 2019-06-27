<?php 

namespace Web\FrontController\Core;

use Web\FrontController\Core\Repository;

class MainRepository implements Repository {
     
     /*
    ОСНОВНЫЕ МЕТОДЫ НА 
     -- добавление записей
     -- получение записей по первичному ключу
     -- получение всех записей
     -- (общие для всех репозиториев)
     
     */

protected $db;
private $class;


public function __construct($class) {
     $this->db = DB::getDB();
     $this->class = $class;
}     

//Получение всех записе из какой-либо таблицы
public function getAll() {
     
     //$class соответствует таблице в БД.
     
     //$class соответствует имени таблицы в БД
     //Например, таблице Picture где хранятся picture1.jpg и т.д.
     //Мы получаем класс вида Web\FrontController\Models\Picture
     //Далее с помощью функции str_replace заменяем \ на обратный слеш / (вторая палочка - это экранирование)
     //Так как функция basename не работает с такими слешами \
     $sql = 'SELECT * FROM '.basename(str_replace('\\', '/', $this->class));
     
     //
     return $this->db->getAll($sql, $this->class);
}


public function getById($id) {
     
     $sql = 'SELECT*FROM '.basename(str_replace('\\', '/', $this_class)).'WHERE id=:id';
     return $this->db->paramsGetOne($sql, ['id'=>$id], $this->class);
     
}
     
     
}

?>