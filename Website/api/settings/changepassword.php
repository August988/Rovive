<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Please login.";
    exit;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $authclass = new Auth;

    $currentPassword = $_POST["currentPassword"];
    $newPassword = $_POST["newPassword"];
    $confirmPassword = $_POST["confirmPassword"];

    if ($newPassword != $confirmPassword) {
        header("HTTP/1.0 400 Bad Request");
        echo "Passwords do not match.";
        exit;
    }

    if (strlen($newPassword) < 8) {
        header("HTTP/1.0 400 Bad Request");
        echo "Password must be at least 8 characters.";
        exit;
    }

    $authclass->changePassword($newPassword);
    echo "Successfully changed password.";
    exit;
}
