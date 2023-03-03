<?php

// 1. Получить и разобрать внешние параметры


// 2. Соединиться с базой данных
require("connect.php");

// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы

$users = array();

$result = $mysqli->query("SELECT DISTINCT * FROM users ORDER BY rating DESC"); // запрос на выборку


while($row = $result->fetch_array(MYSQLI_ASSOC))// получаем все строки в цикле по одной
{
    //echo $row['nickname'], $row['name'];// выводим данные

    array_push($users, $row);
}

// 4. Вернуть результат (итоговые данные) клиенту

echo json_encode($users);

?>