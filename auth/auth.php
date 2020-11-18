<?php 
	include_once 'lib/function_global.php';

	$queryLogin = $_POST['login'];
	$queryPassword = $_POST['pass'];

	$isEmptyQuery = isset($queryLogin) && isset($queryPassword);


	//if (!$isEmptyQuery) {
		$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
		$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

		$db = new DataBase();
		$connection = $db->getConnection(); 
		$query = "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'";
		$result = mysqli_query($connection, $query);
		$user = $result->fetch_assoc();

	 
		$userType = $user['typeId']; 


		switch ($userType) {
			case '1':
				echo "стараста";
				break;

			case '2':
				echo "хуяруста";
				break;

			case '3':
				echo "ктото еще";
				break;
			
			default:
				echo "Нет типа, тут должна быть ошибка";
				break;
		}
		
	//} else {
	//	echo "пошёл нахуй";
	//}






// Я в регистрацию добавил уровень, а в авторизацию уже по глупости добавил, там не будет экранизации |Забей пока| Типо в переменные записать логин и пароль и дальше работать с ним или я не о том?
	

	// Можно я перепишу немного?да конечно




	// Запутал все	

	// $user = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'")



// в общем я не делал запрос, и работало, запрос типо выдает true если находит? Я и подумал, что если логин, пароль и уровень будут совподать, то выведет тру ну и дальше выполнится if


	// if (count($user) == 0) {
	// 	echo "Неверный логин или пароль";
	// } else if(){ 
	// 	echo '
	// 		<meta http-equiv = "Refresh"
	// 		content = "0; URL =list.html">
	// 	';
	// 	exit();
	// } else if($mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass' AND `typeId` = '3'")){
	// 	echo "лаборантка";
	// 	exit();
	// }
?>