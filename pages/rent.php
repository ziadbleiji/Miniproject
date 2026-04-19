<?php
require "database/connection.php";
session_start();

// check login
if (!isset($_SESSION['id'])) {
    header("Location: index.php?url=login-form");
    exit;
}

$user_id = $_SESSION['id'];
$car_id = $_GET['id'];

// simpele datums (later kun je form maken)
$start_date = date('Y-m-d');
$end_date = date('Y-m-d', strtotime('+1 day'));

mysqli_query($conn, "
    INSERT INTO reservations (user_id, car_id, start_date, end_date)
    VALUES ('$user_id', '$car_id', '$start_date', '$end_date')
");

// ga naar account pagina
header("Location: index.php?url=account");
exit;