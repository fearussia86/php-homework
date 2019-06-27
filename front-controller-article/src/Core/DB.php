<?php

namespace Web\FrontController\Core;


class DB {
     
     private $server = 'localhost';
     private $dbName = 'fearusa2_local';
     private $username = 'fearusa2_local';
     private $pwd = 'yuriikimkz';
     
     private static $db; //Можем создать только внутри класса. 
     
     private $connection;
     
     private function __construct() {
          
          //Программа поймет, что $this->connection - это есть $connection  и положит 
          //в переменную $connection объект - новое соединение с базой данных. 
          
          $this->connection = new \PDO("mysql:host=$this->server;dbname=$this->dbName", $this->username, $this->pwd, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
     }
     
     
     public static function getDB() {
          if(self::$db == null) self::$db = new DB();
          return self::$db;
     }
     
     
     public function getAll($sql) {
          $statement = $this->connection->query($sql);
          if(!$statement) return false;
          //$statement->setFetchMode(\PDO::FETCH_ASSOC);
          return $statement->fetchAll(\PDO::FETCH_ASSOC);
     }
     
     
     public function nonSelectQuery($sql, $params) {
          
          $statement = $this->connection->prepare($sql);
          
          if(!$statement) return false;
          return $statement->execute($params);
          
     }
     
     
     public function paramsGetAll($sql, $params, $class) {
          $statement = $this->connection->prepare($sql);
          if(!$statement) return false;
          $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
          return $statement->fetchAll();
     }
     
     
     public function paramsGetOne($sql, $params, $class) {
          
          
          $statement = $this->connection->prepare($sql);
          if(!$statement) return false;
          $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
          return $statement->fetch();
          
     }
     
}




?>