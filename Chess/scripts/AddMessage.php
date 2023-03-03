<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$mes = $_POST["mes"];
$user=$_SESSION["user"];
// 2. Соединиться с базой данных

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

//$myrow = $CheckNick->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
$Result1 = $mysqli->query("INSERT INTO messages (message,date,userID) VALUES ('{$mes}', CURRENT_DATE, {$user})");
echo "INSERT INTO messages (message,date,userID) VALUES ('{$mes}', CURRENT_DATE, {$user})";
?>