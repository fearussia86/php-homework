<?php

echo "<h1>ДЗ, К УРОКУ ПО PHP №5.</h1>";

echo "<h2>ДЗ, К УРОКУ ПО PHP №5, задача №1 (рекурсивное удаление файлов и папок).</h2>";

/*
Удаление каталога. Написать рекурсивную функцию удаления непустого каталога
написать функцию, которая будет удалять каталог и все его содержимое
Осуществить рекурсивный вызов в подкаталогах
Дано: path - путь к каталогу (каталог должен быти с подкаталогами и файлами)

*/

function DeleteRecuv($path)
{
  if(file_exists($path) && is_dir($path)) //Условие - если файл существует или директория является папкой
    {
      $dh = opendir($path); //То тогда мы отркываем папку, вызываем дескриптор ресурса
      while (false !== ($file = readdir($dh))) //до тех пор, пока не закончится отркытие и чтение ресурсов, исполняем код
                      {
                       if ($file!='.' && $file!='..')// исключаем папки с названием '.' и '..' - переходы на уровни
                       {
                        $tmpPath=$path.'/'.$file; //Получаем полный путь к файлу, кладем его в переменную $tmpPath
                        chmod($tmpPath, 0777); //Меняем права, делаем их перезапись.
                        if (is_dir($tmpPath)) //Если в переменной $tmpPath оказывается директория, то
                          {  // запускаем опять функцию, и в аргкумент приходит подкаталог и идет проверка условий опять.
                         DeleteRecuv($tmpPath);
                           }
                          else
                          {  //инача, если в переменной пришел ресурс - файл, то удаляем.
                           if(file_exists($tmpPath))
                         {
                          // удаляем файл
                            unlink($tmpPath);
                         }
                          }
                       }
                      }
                      closedir($dh); //Закрываем открытый ранее каталог

                      if(file_exists($path))
                      {
                       rmdir($path); //Удаляем закрытую папку, как конечный ресурс.
                      }
                     }
                     else
                     {
                      echo "Удаляемой папки не существует или это файл!";
                     }
                    }

                    // Полный путь от корня сайта
                    $ourDir='files';
                    $DeletedDir = (realpath($ourDir));
                    var_dump($DeletedDir);
                    //DeleteRecuv($DeletedDir);


echo "<br>";
echo "<h2>ДЗ К УРОКУ PHP №5, задача №2 Сокращатель ссылок (используем функции)</h2> ";

/*
Сокращатель ссылок (используем функции) пользователь вводит в форму ссылку (используйте input type="url") вы получаете ее валидируете и обрабатываете: проверка на пустоту, filter_var - FILTER_VALIDATE_URL trim,
если все хорошо: проверяете присутствует ли в файле ссылка, которую вводил пользователь, если есть, то получаете короткую ссылку и выводите на экран если нет, создаете хеш определенной длины (алгоритм придумать самостоятельно) если созданный хеш уже есть в файле, то создаете новый до тех пор, пока хеш не станет уникальным записать хеш в файл
информация будет храниться в файле следующим образом: длинная ссылка:короткая ссылка
Дополнительно: длинная ссылка:короткая ссылка:время, когда ссылка устареет При таком варианте, если время жизни закончилось, то нужно проверять его и, если нужно, перегенерировать ссылку
*/



 ?>

 <!DOCTYPE html>
 <html lang="ru">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Форма, сокращатель ссылок</title>
 </head>
 <body>

   <form name="someForm" action="short_link.php" method="post" enctype="multipart/form-data">

     <p><input type="link" name="link" placeholder="Введите ссылку для сокращения"></p>
     <p><input type="submit" value="СОКРАТИТЬ ССЫЛКУ"></p>

   </form>

 </body>
 </html>
