<?php
echo "<h3>Занятие №3, ДЗ №1.</h3>";

/*
Дана строка, содержащая полное имя файла (например, 'C:\OpenServer\testsite\www\someFile.txt'). Написать функцию, которая сможет выделить из подобной строки имя файла без расширения.

По сути к нам в функцию будет приходить строка, которую можно разбить на подстроки с помощью функции explode по указанному разделителю (.) и положить в массив, с разделением
по символу . Далее просто вывести элемент с индексом [0] (т.е. всю строку без .txt), подстрока txt попадет в элемент массива с индексом [1]

Либо есть способ короче, использовать встроенную функцию pathinfo, которая возвращает информацию о пути к файлу.
//указав в свойствах ['filename'] мы тем самым получим имя файла, без расширения.

*/


$filename = "C:\OpenServer\\testsite\www\someFile.txt";



function noextention($file) {

  $filename2 = pathinfo($file);
  var_dump($filename2['filename']);

}


noextention($filename);


echo "<br>";

echo "<h3>Занятие №3, ДЗ №2.</h3>";
/*

Написать функцию - конвертер строки. Возможности (в зависимости от второго аргумента - флаг, который указывает, какую именно операцию следует выполнить): 1) перевод всех символов в верхний регистр, 2) перевод всех символов в нижний регистр, 3) перевод всех символов в нижний регистр и первых символов слов в верхний регистр.`

*/

$string_converter = "No war, let's have fun";

function converter($convert_str, $flag) {
//Флаги могут принимать значения 1, 2, 3
if($flag == 1) {

var_dump(strtoupper($convert_str));

} elseif ($flag == 2) {

  var_dump(strtolower($convert_str));

} else {var_dump(ucfirst($convert_str));}

}

converter($string_converter, 3);



echo "<h3>Занятие №3, ДЗ №3.</h3>";

/*
Создать функцию по преобразованию нотаций: строка вида 'this_is_string' преобразуется в 'thisIsString' (CamelCase-нотация)
*/

$notation_string = 'this_is_string';

function notation($any_notation) {

$explode = explode("_", $any_notation);
foreach ($explode as $key) {


echo $key;
echo "<br>";
$ready_string = str_replace($key, "", ['this', 'Is', 'String']);

}

echo "<br>";
var_dump($ready_string);
var_dump(implode("", $ready_string));

}

notation($notation_string);



echo "<h3>Занятие №3, ДЗ №4.</h3>";


/*Сгенерировать 5 массивов из случайных чисел.
Вывести массивы и сумму компонентов на экран.
Найти массив с максимальной суммой элементов.
Вывести его на экран еще раз.

Заполнение массива и подсчет суммы - разные функции.

*/


$create_arr = function () {
  $num = rand(1, 10);

/*
Функция rand -- Генерирует случайное число
*/

  $arr = range($num, 300, 70);
  /*
  array range ( mixed $start , mixed $end [, number $step = 1 ] )
  Создает массив, содержащий диапазон элементов.
  start
Первое значение последовательности.

end
Конечное значение, которым заканчивается последовательность.

step
Если указан параметр step, то он будет использоваться как инкремент между элементами последовательности. step должен быть положительным числом. Если step не указан, он принимает значение по умолчанию 1.

  */
  return $arr; //Возвращает сгенерированный массив с числами.

};




$all_arr = function ($arr) {
$arrays = [];
  for ($i = 0; $i <=5; $i++) {
    array_push($arrays, $arr());

  }

return $arrays;

};


echo "<br>";
echo "<br>";
var_dump($all_arr($create_arr));

echo "<br>";
echo "<br>";

//Найти массив с максимальной суммой элементов (их значений).

//В функцию get_sum приходит ассоциативный массив $all_arr (который возвращает по сути наш ассоциативный массив)
//из 5 сгенерированных массивов из случайных чисел.

function get_sum($arrays_all) {

//Делаем перебор с помощью foreach
foreach ($arrays_all as $key) {
//Указываем условие, что если существует максимальное количество элементов у элементов ассоциативного массива,
//То выводим в отдалке на экран и еще раз потом возвращаем массив с максиммальным количеством элементов (значений)
if(max($key)) {
  var_dump(max($key));
}

return max($key);



}

}
echo "<br>";
echo "<br>";



var_dump(get_sum($all_arr($create_arr)));
/*
function count_array($arr1, $arr2, $arr3, $arr4, $arr5) {

return var_dump(count());

}

var_dump(count_array());
*/




 ?>
