<?php
require('dbconnect.php');

$result = $conn->query('SELECT * FROM `visit`');
while($row = $result->fetch())
{
    echo '<p>Запись id='.$row['id'].'. Начало сеанса: '.$row['session_time'].'. Конец сеанса: '.$row['end_of_session'].'. 
    id клиента: '.$row['id_client'].'. id фотографа: '.$row['id_photographer'].'. Тип сессии: '.$row['type_session'].'</p>';
}

