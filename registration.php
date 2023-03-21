<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if ($_POST['login'] && $_POST['password']){
    switch ($_POST['role']) {
        case 'Host':
            $role = 2;
            break;
        case 'Participant':
            $role = 3;
            break;
    }
    if ($role == 3 ){
        $result = $conn->query("INSERT INTO client(name, phone, login, password, role)
                VALUES ('".$_POST['Name']."','".$_POST['Phone_numb']."', '".$_POST['login']."',
                '".$_POST['password']."', '".$role."')");
    }
    else if ($role == 2 ) {
        $result = $conn->query("INSERT INTO photographer(name, phone_number, login, password, role)
                VALUES ('" . $_POST['Name'] . "','" . $_POST['Phone_numb'] . "', '" . $_POST['login'] . "',
                '" . $_POST['password'] . "', '".$role."')");
    }
}
require('components/registrationComponent.php');