<?php

/*
Дарья Преподаватель Курсы Итмо:
В качестве тренировки, можно сделать следующее: на первой странице отображаете все задачи пользователя.

На второй - форму  добавления задачи. После того, как пользователь нажал кнопку 'добавить', сохраняете задачу в бд.

Можно усложнить: если пользователь выбрал какую-то задачу, то переходит к форме редактирования: в полях формы отображаются данные по выбранной задаче, пользователь может их изменить и сохранить (таким образом, будет обновление задачи в бд)

Названия полей таблицы придумайте сами.

*/


//include_once "form_handler.php";



 ?>


 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Отображаем все задачи пользователя.</title>
 </head>
 <body>

   <div class="getdata">

<?php
$server = 'localhost';
$dbName = 'pdobase';
$username = 'yuriikimkz2';
$pwd = 'yuriikimkz';

$option = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, /*отображать ошибки при работе с БД, для отладки, ключ => значение*/
  PDO::ATTR_PERSISTENT => true /*Держать соедиение открытым, нагружает сервер, но ускоряет загрузку данных */
];


$connection = new PDO("mysql:host=$server;dbname=$dbName", $username, $pwd, $option);

$sql = 'SELECT * FROM form_data WHERE id=:id'; //Где :id - это имя  параметра, : означает, что мы используем именованные параметры
//При написании id=:id - сам PDO будет проверять переменную на SQL инъекцию.
$params = [
  'id'=>2
];

$statement = $connection->prepare($sql);
$statement->execute($params);


//Получение данных

$data = $statement->fetch(PDO::FETCH_ASSOC);

echo "===========================<br>";
var_dump($data);


 ?>


   </div>

 </body>
 </html>
