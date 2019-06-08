

<?php

//Загрузка нескольких файлов на сервер (обязательно проверять на тип и размер)
$post = $_POST;
var_dump($post);
// данные о загружаемых файлах в массиве $_FILES
$files = $_FILES;
var_dump($files);
// имя файла
echo "Имя файлов <br>";
$name = $files['files']['name'];
$file_size = $files['files']['size'];
var_dump($name);

echo "Выводим переменную tmp_name, определяем место хранения загруженных файлов по умолчанию.<br>";
$tmp_name = $files['files']['tmp_name'];
var_dump($tmp_name);

echo "Папка назначения при перемещении файлов.<br>";
$destination_folder = dirname(__FILE__)."/"."files";
var_dump($destination_folder);

for($i=0; $i<count($name); $i++) {
  $ext = pathinfo($name[$i], PATHINFO_EXTENSION);
  echo "Расширения файлов<br>";
  var_dump($ext);
  $preg_match_file = preg_match('/^(doc|docx|xsl|jpg|jpeg|png|pdf|txt|ppt|rar|mpeg|avi)/', $ext, $matches, PREG_OFFSET_CAPTURE);
  echo "Проверка на соответствие регулярному выражению<br>";
  var_dump($matches);

  if((preg_match('/^(doc|docx|xsl|jpg|jpeg|png|pdf|txt|ppt|rar|mpeg|avi)/', $ext, $matches, PREG_OFFSET_CAPTURE)) && ($file_size > 200000)) {
    //Все окей
    echo "Все окей, файлы прошли валидацию, кладем их в нашу папку на сайте.<br>";
    echo "Размер файла соответствует и не больше 200 Кб.<br>";
    move_uploaded_file($tmp_name[$i], "allfiles/".$name[$i]);


  } else  {
  //error;
  echo "<br>Расширения файлов не позволительны или размер файла превышает 200 Кб<br>";
  echo "<br>Файлы, не прошедшие проверку: <br>".$name[$i];


  }




}






 ?>


<?php
/*
// данные из формы в массиве $_POST
$post = $_POST;
var_dump($post);
// данные о загружаемых файлах в массиве $_FILES
$files = $_FILES;
var_dump($files);
// имя файла
echo "Имя файлов <br>";
$name = $files['files']['name'];
var_dump($name);
// расширение файла
$ext = pathinfo($name, PATHINFO_EXTENSION);
var_dump($ext);
// файл во временной директории
echo "Выводим переменную tmp_name<br>";
$tmp_name = $files['files']['tmp_name'];
var_dump($tmp_name);
echo "Хешируем имена файлов<br>";
$name1 = md5($name['0']); // + дата
$name2 = md5($name['1']); // + дата
var_dump($name1);
var_dump($name2);
// обязательно проверить на type
// обязательно проверить на размер
// перемещение файла
if (move_uploaded_file($tmp_name, "files/$name.$ext")){
    echo "Файл успешно загружен";
} else {
    echo "Файл не был загружен";
}
*/

?>
