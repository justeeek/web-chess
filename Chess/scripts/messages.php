<?php

// 1. Получить и разобрать внешние параметры


// 2. Соединиться с базой данных
require("connect.php");
$end=$_POST['end'];
// 3. Выполнить программную логику: изменить данные в базе и (или) получить данные из базы
$result=array();
$messageResult = $mysqli->query("SELECT m.Id, message, nickname, date from messages m JOIN users u ON u.Id=m.userID WHERE m.Id>'{$end}'");
//$messages = $messageResult->fetch_array(MYSQLI_ASSOC);

while ($food = mysqli_fetch_assoc($messageResult)) {

	array_push($result, $food);
	//print_r($food);

};
// 4. Вернуть результат (итоговые данные) клиенту
//$result=array("nickname"=>$messages["nickname"], "message"=>$messages["message"], "date"=>$messages["date"]);
echo json_encode($result);
?>