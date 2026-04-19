<?php
session_start();
require "database/connection.php";

$email = $_POST['email'];
$pass = $_POST['password'];

$user = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM account WHERE email='$email'"));

if(password_verify($pass,$user['password'])){
    $_SESSION['id'] = $user['id'];
}

header("Location: /");