<?php
require('dbconnect.php');
require('auth.php');
require('components/header.php');

$Visits = $conn->query("SELECT * FROM visit");
$clients = $conn->query("SELECT * FROM client");
$specialists = $conn->query("SELECT * FROM photographer");

require('components/VisitsList.php');
