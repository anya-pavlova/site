<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Anya Pavlova</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="content">
<?php
	include "menu.php";
?>

	<h1>Добро пожаловать на мой сайт</h1>

	<div class="center">
	<img src="img/foto.png">
		<div class="box_text">
			<p>Добрый день. Меня зовут Аня Павлова я программист-биоинформатик. На этом сайте представлено несколько простых скриптов которые я написала.
			Так же, вы можете посмотреть мой код на <a href="https://github.com/anya-pavlova"> git hub </a>
			</p>

			<p>На этом сайте вы сможете сыграть в несколько игр, которые я написала: 
			<a href="index.php">Главная</a>,
			<a href="puzzle.html">Загадки</a>,
			<a href="guess.html">Угадайка</a>
			<a href="pass.html">Генерация паролей</a>
			</p>
		</div>
	</div>
</div>


<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Anya Pavlova
<div>

</body>
</html>