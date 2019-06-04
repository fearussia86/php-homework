<?php

function DeleteRecuv($path)
{
  if(file_exists($path) && is_dir($path))
    {
      $dh = opendir($path);
      while (false !== ($file = readdir($dh)))
                      {
                       if ($file!='.' && $file!='..')// исключаем папки с названием '.' и '..' - переходы на уровни
                       {
                        $tmpPath=$path.'/'.$file;
                        chmod($tmpPath, 0777);
                        if (is_dir($tmpPath))
                          {  // если папка
                         DeleteRecuv($tmpPath);
                           }
                          else
                          {
                           if(file_exists($tmpPath))
                         {
                          // удаляем файл
                            unlink($tmpPath);
                         }
                          }
                       }
                      }
                      closedir($dh);
                      // удаляем текущую папку
                      if(file_exists($path))
                      {
                       rmdir($path);
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




 ?>
