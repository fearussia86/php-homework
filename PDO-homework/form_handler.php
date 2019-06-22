<?php

$post = $_POST;
//var_dump($post);
$login = $post['login'];
$pass = $post['password'];
$email = $post['email'];
$dateBirth = $post['dateBirth'];
$country = $post['country'];

$server = 'localhost';
$dbName = 'pdobase';
$username = 'yuriikimkz2';
$pwd = 'yuriikimkz';

$option = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, /*отображать ошибки при работе с БД, для отладки, ключ => значение*/
  PDO::ATTR_PERSISTENT => true /*Держать соедиение открытым, нагружает сервер, но ускоряет загрузку данных */
];


$connection = new PDO("mysql:host=$server;dbname=$dbName", $username, $pwd, $option);

if((!empty($login)) && (!empty($pass)) && (!empty($email)) && (!empty($dateBirth)) && (!empty($country))) {

echo "Данные пришли в переменных";

$sql = 'INSERT INTO form_data (login, pwd, email, dateBirth, country) VALUES (:login, :pwd, :email, :dateBirth, :country)';

$login = $post['login'];
$password = $post['password'];
$email = $post['email'];
$dateBirth = $post['dateBirth'];
$country = $post['country'];

$params = [

  'login' => $login,
  'pwd' => $password,
  'email'=>$email,
  'dateBirth'=>$dateBirth,
  'country'=>$country

];

$statement = $connection->prepare($sql);
if ($statement->execute($params)) {
  echo "Данные успешно добавлены <br>";
}


}



var_dump($login);
echo "<br>";
var_dump($pass);
echo "<br>";
echo "Пользователь: $login";
echo "<br>";
echo "Пароль: $pass";
echo "<br>";
echo "Почта  $email";
echo "<br>";
echo "День рождения: $dateBirth";
echo "<br>";
echo "Пол: $male $female";
echo "<br>";
echo "Страна рождения: $country";
echo "<br>";


 ?>
