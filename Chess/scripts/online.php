<?php

// 1. Получить и разобрать внешние параметры
session_start();
$user = $_SESSION["user"];
if(!$_SESSION["user"])
	exit();
// 2. Соединиться с базой данных
require("connect.php");
// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
$mysqli->query("UPDATE users SET last_online = NOW() WHERE id = '{$user}'");

?>