<?php
declare(strict_types=1);
session_start();

if (empty($_SESSION['user_id'])) {
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];

    header('Location: login.php');
    exit;
}?>