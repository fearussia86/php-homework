<?php
$post = $_POST;
$link = $post['link'];
var_dump($link);
var_dump($post);
echo "<br>";
echo "<br>";
echo "<br>";
$path = realpath("links.txt");
var_dump($path);

$filter_link = filter_var($link, FILTER_VALIDATE_URL);

//var_dump($filter_link );

$fp = fopen($path, 'r');
var_dump($fp);



function validate($somelink, $anypath) {
  if (!empty($somelink) && filter_var($somelink, FILTER_VALIDATE_URL)) {
    $fp = fopen($anypath, 'r');
    if ($fp) {
      
    }
  }
}



//validate($link, $path);
 ?>
