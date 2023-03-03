<?php

// 1. Получить и разобрать внешние параметры
$nickname = $_POST["nickname"];
$password = $_POST["password"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

$loginResult = $mysqli->query("SELECT id, nickname, rating, osebe, country FROM users WHERE nickname = '{$nickname}' AND password = '{$password}'");
$user = $loginResult->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
if ($user) {
	session_start();
	$_SESSION["user"] = $user["id"];
	$_SESSION["nickname"] = $user["nickname"];
	$_SESSION["rating"] = $user["rating"];
	$_SESSION["osebe"] = $user["osebe"];
	$_SESSION["country"] = $user["country"]; 
	echo $user["id"];
} else {
	echo 0;
}

?>