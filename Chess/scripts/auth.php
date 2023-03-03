<?php

// 1. Получить и разобрать внешние параметры

// 2. Соединиться с базой данных

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
session_start();
if (!empty($_SESSION['user'])){
	$result = array("user_id" => $_SESSION['user'], "user_nickname" => $_SESSION['nickname'], "user_rating" => $_SESSION['rating'], "user_osebe" => $_SESSION['osebe'], "user_country" => $_SESSION['country']);
	echo json_encode($result);
} else echo 0;

?>