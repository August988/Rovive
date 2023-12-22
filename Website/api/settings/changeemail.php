<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/main.php';

if (!isset($_SESSION["user"])) {
    header("HTTP/1.1 403 Forbidden");
    echo "Please login.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userclass = new User;
    
    $newEmail = $_POST["newEmail"];

    $userclass->changeEmail($_SESSION["user"]["id"], $newEmail);
    echo "Successfully changed bio.";
    exit;
}
