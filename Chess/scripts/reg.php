<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
$nickname = $_POST["nickname"];
$password1 = $_POST["password1"];
$password2 = $_POST["password2"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

$CheckNick = $mysqli->query("SELECT nickname FROM users WHERE nickname = '{$nickname}'");
//$myrow = $CheckNick->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту

if ($CheckNick->num_rows > 0){
	echo 'login';
}
else if ($password1 == $password2){
	$Result1 = $mysqli->query("INSERT INTO users (nickname,password,rating, avatar) VALUES ('{$nickname}', '{$password1}', '0', '0')");
	echo 'success';
}
else if (!$password1 != $password2) {
	echo 'failed';
}


?>