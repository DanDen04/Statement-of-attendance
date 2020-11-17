<?php
include "lib/function_global.php";

	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$correct = registrationCorrect();
	if($correct){
		$mysql = new mysqli('localhost', 'root', 'root', 'register-bd'); // Подключение к БД.
		$mysql->query("INSERT INTO `users` (`login`, `pass`) VALUES('$login','$pass')"); // Занесение данных.

		echo "Вы занесены в БД";
	}
?>