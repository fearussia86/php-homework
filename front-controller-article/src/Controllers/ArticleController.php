<?php
namespace Web\FrontController\Controllers;

use Web\FrontController\Core\Controller;

use Web\FrontController\Models\ArticleRepository;

class ArticleController extends Controller

{
     
private $articleRepository;  

public function __construct() {
     $this->articleRepository = new ArticleRepository();
}


public function addAction() {
     
     if($_SERVER['REQUEST_METHOD'] == 'GET') {
          echo parent::renderPage('add_article.php', 'template.php');
     } elseif ($_SERVER['REQUEST_METHOD']== 'POST') {
          
          $post = $_POST;
          
          $params = [
               
               'title'=>$post['title'],
               'content'=>$post['content'],
               'date'=>$post['date']
               
               ];
               
         if($this->articleRepository->save($params) === false) {
              $addResult = "Статья не добавлена";
              
         } else {
              $addResult = "Статья добавлена";
         }  
          
          $data = [
             'title'=>'Добавление статьи',
             'addResult'=>$addResult
           
             
             ];
          
          echo parent::renderPage('add_article', 'template.php', $data);
          
     }
     
}
     

    public function showAction(){
        echo "Генерация страницы статей";
        $content='articles.php';
        $template='template.php';
        $data=[
            'title'=>'Статьи'
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