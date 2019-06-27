<p>ДОБАВЛЕНИЕ СТАТЬИ</p>




<!--Всегда будут уходить на сервер через файл index.php-->
<!--Где picture - это будет контролллер, а add - это будет action -->
<form method="post" action="/article/add" enctype="multipart/form-data">
     
     <p><label for="">Название статьи<input type="text" name="title"></label></p>
     
     <p><label for="">Содержание статьи</label>
     <textarea name="content" cols="50" rows="20"></textarea>
     </p>
     
     <p><label for="">ДАТА ПУБЛИКАЦИИ: <input type="date" name="date"></label></p>
     
     
     
     <p><input type="submit" value="Добавить"></p>



</form>
