<?php
	function registrationCorrect() {
		if ($_POST['login'] == "") return false; //не пусто ли поле логина 	
		if ($_POST['pass'] == "") return false; //не пусто ли поле пароля
		if (strlen($_POST['pass']) < 5) return false; //не меньше ли 5 символов длина пароля
		return true; //если выполнение функции дошло до этого места, возвращаем true
	} 
?>