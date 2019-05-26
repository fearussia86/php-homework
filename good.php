<?php

/*
Задача №1, домашнее задание 2
Дано число $num=800. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
*/

echo "<h2>Домашнее задание 2, PHP</h2>";
echo "<br>";
echo "===============================================================";
echo "<h2>Домашнее задание 2, задача 1.</h2>";
$num = 800;
$iteration = 0;

while ($num > 50) {
  $num = $num/2;
  echo "<br>";
  echo $iteration++;

}
echo "<br>";
echo "Количество итераций: $iteration";
echo "<br>";
echo "<br>";
/*
  $num = 1;

  while ($num <= 10) {
    echo "Итерация номер: $num<br>\n";

    $num++;
  }
*/

//Через цикл for

$number = 800;


for ($i=0; $i < 10; $i++) {
  if ($number/2 > 50) {
    $number = $number/2;
    echo "Число после деления на 2, $number <br>";
  } else {
    echo "Результат деления стал меньше 50, итерации прекращаются.";
  }
}

?>



/*
Задача №2, задание 2.
*/

<?php



echo "<br>";
echo "===============================================================";
echo "<h2>Домашнее задание 2, задача 2.</h2>";

$goods = [
    [
        'id'=>1,
        'title'=>'Piano',
        'price'=>2345
    ],
    [
        'id'=>2,
        'title'=>'Guitar',
        'price'=>1753
    ],
    [
        'id'=>3,
        'title'=>'Drum',
        'price'=>1224
    ],
];

$get = $_GET;
$id = $get['id']; // получаем id товара



// TODO: получить товар из массива $goods по id, сохранить в переменную $good


$isAuth = true; // флаг - авторизован пользователь или нет


foreach($goods as $keys => $goodsValue) {

  var_dump($keys . ' = ' . $goodsValue.'<br>' );

  if (isset($id)) {
    array_push($goods, $goodsValue);

}
}

echo $goods;
echo "<br>";
var_dump($goods[0]);


//echo $resultArray[14]['VALUE']; //VALUE последнего элемента, где COUNTER-ID = 14


//$good = $goods[0]['id'];
//var_dump($good);


//Нужно перебрать массивы в массиве по id, и отталкиваясь от id, положить товар(один из массивов в массиве)
//В отдельную переменную $good и вывести ее в html тегах.

/*
foreach ($goods as $arrExternal => $valueExternal) {
    echo "<br>";
  echo "$arrExternal => $valueExternal<br>";

foreach ($valueExternal as $good => $goodValue) {

echo "$good => $goodValue<br>";
echo "<br>";

foreach ($goodValue as $price) {
  // code...

  echo "Сортировка массива по цене: ".$price."<br>";
}

}

}
*/
echo "<br>";

echo "<br>";







 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<section>
<!--    TODO: вывести информацию о товаре $good-->

<h3><?php echo $goods[0]['title'] ?></h3>
<span><?php echo "<br>"; ?></span>
<p>ЦЕНА:  <?php echo $goods[0]['price'];  ?></p>
<p>ID ТОВАРА: <?php echo $goods[0]['id'];  ?> </p>

</section>


<!--    TODO: если пользователь авторизован $isAuth - отобразить блок для добавления комментариев, в противном случае, сообщить, что ему нужно авторизоваться-->

<section id="comment">

<div class="">
  <?php

$comment = "<form>

<p><textarea name=\"comment\" id=\"comment\" cols=\"48\" rows=\"8\"> </textarea>
</p>
<p><input name=\"submit\" type=\"submit\" id=\"submit\" value=\"Отправить\" />
</p>
</form>";

if ($isAuth == true) {

echo $comment;

} else {
  echo "Вы не авторизованы на сайте, пожалуйста, войдите на сайт, используя Ваш логин и пароль";
}

  ?>


</div>

</section>


</body>
</html>









<?php

/*
3. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски.
*/

echo "<br>";
echo "<h3>Дни недели, Домашнее задание 2, задача 3.</h3>";
echo "<br>";

$week = [

'1' => 'Понедельник',
'2' => 'Вторник',
'3' => 'Среда',
'4' => 'Четверг',
'5' => 'Пятница',
'6' => 'Суббота',
'7' => 'Воскресение',
'today' => date("D M j G:i:s T Y")

];


foreach($week as $key => $value) {
  //На каждой итерации будет передаваться в $key один из ключей
  //На каждой итерации будет пеередаваться в $value одно из значений ключа
  var_dump($key . ' = ' . $value.'<br>' );

}

//Не работает.
echo "<br>";

$arrayValues =  array_values($week['today']);

echo "<b>$arrayValues</b>";


//echo "<h3>Текущая дата: array_values($week[9])</h3>";


/*
Задача №4, задание 2.
Отсортировать массив, который находится в файле lesson2/tasks.php, по 'price'. При решении использовать функции для работы с массивами.

*/

echo "<br>";
echo "<h3>Сортировка по цене, домашнее задание 2, задача 4.</h3>";
//Отсортировать массив по 'price'
$arr = [
    '1'=> [
        'price' => 10,
        'count' => 2
    ],
    '2'=> [
        'price' => 5,
        'count' => 5
    ],
    '3'=> [
        'price' => 8,
        'count' => 5
    ],
    '4'=> [
        'price' => 12,
        'count' => 4
    ],
    '5'=> [
        'price' => 8,
        'count' => 4
    ],
];


foreach ($arr as $arr2=>$value2) {
  echo "Сортировка массива по цене: ".$value2['price']."<br>";
}

 ?>
