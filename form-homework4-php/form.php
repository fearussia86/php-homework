<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Валидатор формы с отправкой Ajax запросом, а также с перезагрузкой страницы</title>




</head>
<body>

<form name="someForm" action="form_handler.php" method="post">
    <p><input class="validate" name="login" type="text" placeholder="login" required></p>
    <p><input class="validate" name="password" type="password" placeholder="password" required></p>
    <p><input type="email" name="email" class="validate" placeholder="email"></p>
    <p><input type="date" class=".validate" name="dateBirth" ></p>
    <p><h3>Выберите Ваш пол:</h3></p>
    <p>Мужской пол <input type="radio" id="male" name="male" value="male"></p>
    <p>Женский пол <input type="radio" id="female" name="female" value="female"></p>

    <p><h2>Выберите страну проживания: </h2></p>

    <select name="country">

    <option value="Russia">Россия</option>
    <option value="Belgium">Бельгия</option>
    </select>


  <p>  <input type="submit" value="ОТПРАВИТЬ"></p>
</form>




<br>
<br>


<script src="main.js"></script>
<script src="index.js"></script>
</body>
</html>
