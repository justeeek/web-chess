<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$osebe = $_POST["osebe"];
$country = $_POST["country"];
$user=$_SESSION["user"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

//$create1 = $mysqli->query("UPDATE users SET Osebe = '{$osebe}' WHERE Osebe = '?'")
if ($osebe == "")
{
    $Create2 = $mysqli->query("UPDATE users SET country = '{$country}' WHERE id = '{$user}'");
}
else {
    $Create = $mysqli->query("UPDATE users SET osebe = '{$osebe}' WHERE id = '{$user}'");
    $Create2 = $mysqli->query("UPDATE users SET country = '{$country}' WHERE id = '{$user}'");
}

//$myrow = $CheckNick->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
?>