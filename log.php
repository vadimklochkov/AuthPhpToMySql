<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
  $mysqli = @new mysqli('localhost', 'phpmyadmin', 'Gogoork_1337_vsdvsSdfasd', 'users');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
  //методом пост вписываем данные пользователя
  $Ulogin = $_POST['login'];
  $Upassword = $_POST['password'];
  		//делаем масив который содержит пароль с определённого логина
		$result = $mysqli->query ("SELECT 'password' FROM `users` WHERE `first_name` LIKE '$Ulogin' AND `password` LIKE '$Upassword'");
		$user = mysqli_fetch_assoc($result); //преобразуем ответ из БД в нормальный массив PHP
//Если база данных вернула не пустой ответ - значит пара логин-пароль правильная

		//условия содержания пользователя в масиве
		if (!empty($user)) {
			//если есть
			echo "Авторизация успешна";
		} else {
			//если нету
			echo "Неверный логин или пароль. Если вы у нас впервые зарегестрируйтесь.";
		}

  $mysqli->close();
?>