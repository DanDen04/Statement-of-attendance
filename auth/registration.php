<?php
	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
	$level = $_POST['level'];

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bd'); // Подключение к БД.
	$mysql->query("INSERT INTO `users` (`login`, `pass`, `typeId`) VALUES('$login','$pass','$level')"); // Занесение данных.
?>