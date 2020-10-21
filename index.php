<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ведомость посещаемости</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container mt-4">
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<div class="row">
			<div class="col">
				<h1>Регистрация</h1>
		    	<form action="validation-form/check.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success" type="submit">Зарегистрироваться</button>
				</form>
			</div>
			<div class="col">
				<h1>Авторизация</h1>
		    	<form action="validation-form/auth.php" method="post">
					<input type="text" class="form-control" name="login" id="login" placeholder="Логин"><br>
					<input type="password" class="form-control" name="pass" id="pass" placeholder="Пароль"><br>
					<button class="btn btn-success" type="submit">Войти</button>
				</form>
			</div>
		</div>
		<?php else: ?>
			<p>Привет <?=$_COOKIE['user']?>. Чтобы выйти нажмите <a href="/exit.php">здесь</a></p>
		<?php endif; ?>
	</div>
</body>
</html>