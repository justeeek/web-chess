<?php

// 1. Получить и разобрать внешние параметры
//$name = $_POST["name"];
$myid=$_POST["myid"];

// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
$users = array();
$loginResult = $mysqli->query("SELECT * FROM users WHERE id = '{$myid}'");
//$result = $loginResult->fetch_array(MYSQLI_ASSOC);

// 4. Вернуть результат (итоговые данные) клиенту
while($row = $loginResult->fetch_array(MYSQLI_ASSOC))// получаем все строки в цикле по одной
{
    //echo $row['nickname'], $row['name'];// выводим данные

    array_push($users, $row);
}

// 4. Вернуть результат (итоговые данные) клиенту

echo json_encode($users);
?>