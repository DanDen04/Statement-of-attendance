<?php 
	$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$mysql = new mysqli('localhost', 'root', 'root', 'register-bd'); 

	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");

	$user = $result->fetch_assoc();

	if (count($user) == 0) {
		echo "Неверный логин или пароль";
		exit();
	} else {
		echo '
			<meta http-equiv = "Refresh"
			content = "0; URL =list.html">
		';
		exit();
	}
?>