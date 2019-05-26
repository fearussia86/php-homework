

<?php



$goods = array([
'id' => 1,
'title' => 'Piano',
'price' => 234,
'img' => 'piano.jpeg'
],

[
'id' => 2,
'title' => 'Piano2',
'price' => 244,
'img' => 'piano2.jpeg'
],

[
'id' => 3,
'title' => 'Piano3',
'price' => 294,
'img' => 'piano3.jpeg'
]);





?>






 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Товары</title>
 </head>
 <body>


   <section>

<?php

foreach ($goods as $key):
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "=====================================================================<br>";
var_dump($key);
?>

<h3><?php echo $key['title'] ?></h3>
<span><?php echo "<br>"; ?></span>
<img src="/img/goods/<?php echo $key['img']; ?>" alt="">
<p>ЦЕНА:  <?php echo $key['price'];  ?></p>
<a href="good.php?id=<?php echo $key['id'];  ?>">Подробнее</a>

<?php endforeach; ?>

   </section>

<section>


<?php
echo "Тест";
//ДЗ по полученному id нам нужно получить соответствующий товар, записать его в отдельный массив и сохранить его
//в переменную и далее вывести его на экран.



//$good =
//$auth = false;
//Если значение данной переменной false, то ему пишем, что комментарии могут оставлять только зарегистрированные пользователи,
//Если значение переменной true, то выводим ему textarea для написания.
//Вывод информации о товаре, по которому запрошено id

 //Далее отображаем блок комментариев для авторизованного пользователя


//$good = $goods[id-1] и используя foreach получать товары


 ?>






  <?php

  echo "<br>";

//foreach($goods as $good) {
//  var_dump($good);
//}

echo "<br>";

  //foreach($goods as $key2[id-1]) {

  //  var_dump($key2[id-1]);


  //}


/*if() {

} else () {}
*/
   ?>


</section>

 </body>
 </html>
