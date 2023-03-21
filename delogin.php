<?php
require('dbconnect.php');
require('auth.php');
$Visits = $conn->query("SELECT * FROM Visit");

if($_SESSION['user_type'] == 3)
{
    while($item = $Visits->fetch()) {
        if ($item['id_client'] == $_SESSION['id_auth_user']){
            $conn->query(" DELETE FROM visit WHERE id_client='". $_SESSION['id_auth_user']."'");
        }}

    $conn->query(" DELETE FROM client WHERE id='". $_SESSION['id_auth_user']."'");
    session_unset();
}
else if($_SESSION['user_type'] == 2)
{
    $conn->query(" DELETE FROM photographer WHERE id='". $_SESSION['id_auth_user']."'");
    session_unset();
}
require('index.php');
