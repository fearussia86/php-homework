<?php

$post = $_POST;
//var_dump($post);
$login = $post['login'];
$pass = $post['password'];
$email = $post['email'];
$dateBirth = $post['dateBirth'];
$male = $post['male'];
$female = $post['female'];
$country = $post['country'];
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
