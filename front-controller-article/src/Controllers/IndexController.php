<?php

namespace Web\FrontController\Controllers;

ini_set('display_errors',1);
error_reporting(E_ALL);




use Web\FrontController\Models\PictureRepository;
use Web\FrontController\Models\ArticleRepository;
//require_once __DIR__.'/../Models/PictureRepository.php';


class IndexController
{
     
     private $pictureRepository;
     private $articleRepository;
     
     public function __construct() {
          $this->pictureRepository = new PictureRepository;
          $this->articleRepository = new ArticleRepository;
     }
     
     
     
     
    public function indexAction(){
        echo "Генерация главной страницы <br>";
        $content='main.php';
        $template='template.php';
        $pictures = $this->pictureRepository->getAll();
        $articles = $this->articleRepository->getAll();
        var_dump($pictures);
        
        $data= [
            'title'=>'Главная',
            'pictures' => $pictures,
            'articles' => $articles
        ];
        //вывели страничку $page
        echo $this->renderPage($content,$template,$data);
    }
    public function renderPage($content,$template,$data=[]){
        extract($data);
        //преобразует массив к виду переменна($ключ = "значение") $title='Главная';
        ob_start();
        include_once __DIR__.'/../Views/'.$template;
        //перетащили считай все содержимое template.php
        // и весь этот треш гладется строкой в переменную $page
        $page=ob_get_contents();
        ob_end_clean();
        return $page;
    }

}




