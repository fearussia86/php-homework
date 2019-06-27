<?php if (isset($addResult)):?>
<p><?php echo $addResult; ?></p>

<?php endif; ?>


<!--Всегда будут уходить на сервер через файл index.php-->
<!--Где picture - это будет контролллер, а add - это будет action -->
<form method="post" action="/picture/add" enctype="multipart/form-data">
     
     <p><label for="">Название <input type="text" name="title"></label></p>
     
     <p><label for="">Описание </label>
     <textarea name="description" cols="50" rows="20"></textarea>
     </p>
     
     <p><label for="">ГОД <input type="date" name="yearCreated"></label></p>
     
     <p><label for="">Фото: <input type="file" name="img" accept="image/*"></label></p>
     
     <p><input type="submit" value="Добавить"></p>



</form>
