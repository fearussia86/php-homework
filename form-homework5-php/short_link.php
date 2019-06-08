<?php
$post = $_POST;
//Получаем ссылку, переданную методом $POST на сервер.
$link = htmlspecialchars($post['link']);
var_dump($link);
var_dump($post);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h3>Полный путь к файлу</h3>";
//Получаем реальный полный путь к файлу.
$path = realpath("links.txt");

var_dump($path);




echo "<br>";
$filter_link = filter_var($link, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED);



if (!$filter_link) {
echo "Введенные в поле формы данные $link не являются url адресом, ссылкой либо Вы забыли ввести ссылку с http/https протоколом";

} else {
echo "<br>";
echo "Валидация проведена, далее проверяем, существует ли в файле ссылка";
echo "<br>";
//Для этого мы открываем файл для чтения, записи, каждая строка превращается в элемент массива.
//Если ссылка существует в файле, то делаем ряд операций, если нет - то создаем хеш определенной длины, проверяем
//Есть ли он в файле, проверяем его уникальность и т.д.
$content = file($path);
echo "<br>";
echo "Выводим данные из файла в массив";
echo "<br>";
var_dump($content);


foreach ($content as $key => $value) {
  var_dump($value);

  /*
  $checkstring = explode(";", $value);
  echo "Выводим массив с элементами строки, разделенными по символу ;<br>";
  //var_dump($checkstring);
  var_dump($checkstring['0']);
  var_dump($checkstring['1']);
*/

/*
  Здесь мы парсим URL, пришедший из формы, разбиваем и берем только домен, корень сайта, к которому добавляем
  короткую ссылку, далее проводим склейку двух строк - длиной и короткой ссылки и разделителя ; и кладем новую готовую
  строку в переменную.
*/
  $url_parse = parse_url($link, PHP_URL_HOST);
    $anysymbols = 'shrtlnk';
    $short_key = substr(str_shuffle($anysymbols), 0, 7); //str_shuffle меняет местами буквы
    $life_time = date('Y-m-d', time() + 86400);
    $today = date('Y-m-d');
    $short_link = $url_parse."/".$short_key;
    echo "<br>";


  if($link == $value) {

    //var_dump($link);


echo "Длинная ссылка существует в файле, ее короткий вариант: ".$short_link;
var_dump($short_link);

echo "<br>";

} else {
   echo "Длинной ссылки не существует в файле links.txt, кладем данные в формате длинная_ссылка;короткая_ссылка;время в файл";
         $result = $link.";".$short_link.";".$today."\n";
         file_put_contents('links.txt', $result, FILE_APPEND|LOCK_EX);
         $hash_link = md5($link)."\n";

         if (!$hash_link) {

            file_put_contents('links.txt', $hash_link, FILE_APPEND);
         } else {
           unset($hash_link);
           $regenerate_hash_link = sha1($link)."\n";
           file_put_contents('links.txt', $regenerate_hash_link, FILE_APPEND);
         }

         if ($life_time) {
            $short_link = $url_parse."/".$short_key;
            echo "Время жизни закончилось, мы перегенерировали короткую ссылку, вот она:   $short_link";
         }




 }



}

echo "<h3>Открываем файл для чтения и записи</h3>";

echo "<br>";



echo "<h3>Выделяем хост, домен из всего url адреса</h3>";
//$url_parse = parse_url($link, PHP_URL_HOST);
//echo $url_parse;
//Придет ассоциативный массив, нам надо получить значение host

/*
foreach ($parse_url as $key=>$value) {
  var_dump($value);
}
*/


//Тут надо написать функцию, которая будет создавать массив длинная ссылка:короткая ссылка
//руками написать длинную ссылку и короткую ссылку, а также время, когда ссылка устареет.
//Далее сравниваем длинные ссылки и если есть уже такая, то мы отдаем короткую ссылку, которую сгененировали
//Не забываем задать время, в течении которого ссылка действует.




/*Далее берем данные из файла, приходит построчный массив, который разбивается по разделителю ;
И далее проверяется длинная ссылка, если в файле уже есть такая длинная ссылка, то получаем ее короткий вариант
и выводим на экран. А если ее нет, то делаем хеш длинной ссылки, если созданный хеш уже есть в файле,
то создаете новый до тех пор, пока хеш не станет уникальным записать хеш в файл
*/





}







 ?>
