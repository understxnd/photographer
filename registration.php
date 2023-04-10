<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

if ($_POST['login'] && $_POST['password']) {
    switch ($_POST['role']) {
        case 'Host':
            $role = 2;
            break;
        case 'Participant':
            $role = 3;
            break;

    }
    if (strlen($_POST['name']) >= 3) {
        if ($file = fopen($_FILES['filename']['tmp_name'], 'r+')) {
            //получение расширения
            $ext = explode('.', $_FILES["filename"]["name"]);
            $ext = $ext[count($ext) - 1];
            $filename = 'file' . rand(100000, 999999) . '.' . $ext;

            $resource = Container::getFileUploader()->store($file, $filename);
            $picture_url = $resource['ObjectURL'];
        } else {
            $picture_url = '/assets/404.jpg';
        }

        if ($role == 3) {
            try {
                $sql = 'INSERT INTO client(name, phone, login, password, role, img_url) VALUES(:Name, :Phone_numb, :login, :password, :role, :picture_url)';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':Name', $_POST['Name']);
                $stmt->bindValue(':Phone_numb', $_POST['Phone_numb']);
                $stmt->bindValue(':login', $_POST['login']);
                $stmt->bindValue(':password', $_POST['password']);
                $stmt->bindValue(':role', $role);
                $stmt->bindValue(':picture_url', $picture_url);
                $stmt->execute();
            } catch (PDOexception $error) {
                $_SESSION['msg'] = "Ошибка создания " . $error->getMessage();
            }
        } else if ($role == 2) {
            try {
                $sql = 'INSERT INTO photographer(name, phone, login, password, role, img_url) VALUES(:Name, :Phone_numb, :login, :password, :role, :picture_url)';
                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':Name', $_POST['Name']);
                $stmt->bindValue(':Phone_numb', $_POST['Phone_numb']);
                $stmt->bindValue(':login', $_POST['login']);
                $stmt->bindValue(':password', $_POST['password']);
                $stmt->bindValue(':role', $role);
                $stmt->bindValue(':picture_url', $picture_url);
                $stmt->execute();

            } catch (PDOexception $error) {
                $_SESSION['msg'] = "Ошибка создания " . $error->getMessage();
            }
        }
    }
}
require('components/registrationComponent.php');