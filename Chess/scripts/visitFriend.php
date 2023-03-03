<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
session_start();
$myid=$_POST["myid"];
$user=$_SESSION["user"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
$friends = array();
$loginResults = $mysqli->query("SELECT nickname FROM users INNER JOIN friends ON users.id = friends.friend_id WHERE '{$myid}' = friends.user_id");
//$result = $loginResult->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
while($row = $loginResults->fetch_array(MYSQLI_ASSOC))// получаем все строки в цикле по одной
{
    //echo $row['nickname'], $row['name'];// выводим данные

    array_push($friends, $row);
}

// 4. Вернуть результат (итоговые данные) клиенту

echo json_encode($friends);
?>