<?php 

namespace Web\FrontController\Controllers;

use Web\FrontController\Core\Controller;

use Web\FrontController\Models\PictureRepository;



class PictureController extends Controller {
     
     
     private $pictureRepository;
     public function __construct() {
          $this->pictureRepository = new PictureRepository();
     }
     
     
   //Метод сработает на запрос /picture/add
   public function addAction() {
        //Если GET запрос, то отображаем форму
        //Если POST запрос - обрабатываем данные
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
             
             //Если get запрос, то отображаем форму
             
                $data = [
                  
                  'title'=>'Добавление картины'
                  
                  ];
             
             echo parent::renderPage('add_picture.php', 'template.php');
             
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
             
             //Если post то  получаем данные в массиве в POST, проверяем на тип данных, 
             //Кладем далее в папку??
             
             $post = $_POST;
             $files = $_FILES;
             
             $params = [
                  
                  'title' => $post['title'],
                  'description' => $post['description'],
                  'yearCreated' => explode("-", $post['yearCreated'])[0],
                  'img'=> $files['img']['name']
                  
                  ];
                  
                
               if($this->pictureRepository->save($params) === false) {
                    $addResult = "Картина НЕ ДОБАВЛЕНА";
               } else {
                    $addResult = "Картина добавлена";
               }
                  
             
             $data = [
                  
                  'title'=>'Добавление картины',
                  'addResult' => $addResult
                  
                  ];
             
             echo parent::renderPage('add_picture.php', 'template.php');
             
             
          //     'INSERT INTO Picture'
             
             
        }
        
   }
   
   
   public function showAction($id) {
        $picture = $this->pictureRepository->getById($id);
        var_dump($picture);
        
        $data = [
             'title'=>$picture['title'],
             'picture'=>$picture
           
             
             ];
             
     
     echo parent::renderPage('picture.php', 'template.php', $data);        
   }
     

     //Повторяющиеся куски кода выносим в абстрактный класс, создаем в папке core
     //файл controller.php и туда запихиваем дублирующий код, все остальные контроллеры
     //будут наследовать ему через extends. 
     //Наследование и вызов методов основного класса дочерними будет через parent::
     
}


?>