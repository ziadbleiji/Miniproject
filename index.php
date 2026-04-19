<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$url = $_GET['url'] ?? 'home';

switch ($url) {

    case 'home':
        require 'pages/home.php';
        break;

    case 'ons-aanbod':
        require 'pages/ons-aanbod.php';
        break;

    case 'over-ons':
        require 'pages/over-ons.php';
        break;

    case 'car-detail':
        require 'pages/car-detail.php';
        break;

    case 'account':
        require 'pages/account.php';
        break;

    case 'events':
        require 'pages/events.php';
        break;

    case 'privacy':
        require 'pages/privacy.php';
        break;

    case 'terms':
        require 'pages/terms.php';
        break;

    case 'login-form':
        require 'pages/login-form.php';
        break;

    case 'login':
        require 'pages/login.php';
        break;

    case 'register':
        require 'pages/register.php';
        break;
    
        case 'rent':
    require 'pages/rent.php';
    break;

    default:
        require 'pages/home.php';
        break;
}